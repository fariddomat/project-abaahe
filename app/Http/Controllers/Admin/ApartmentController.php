<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
    use Session;
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\Facades\Image;
use App\Propertie;

use App\Apartment;
use App\LogSystem;
use Illuminate\Support\Facades\Redirect;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $project = Project::find($request->projectId);
        if ($project) {
            $apartments = Apartment::where('project_id', $project->id)->paginate(5);
            return view('admin.apartments.index', compact('project', 'apartments'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $project = Project::find($request->projectId);
        if ($project) {
            return view('admin.apartments.create', compact('project'));
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'code' => 'required',
            'count' => 'required',
            'area' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'details' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $request_data = $request->except(['img']);
        $img = Image::make($request->img)->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })
            ->encode('jpg');
        Storage::disk('local')->put('public/images/'.$request->project_id.'/' . $request->img->hashName(), (string)$img, 'public');
        $request_data['img'] = $request->img->hashName();
        $project=Project::find($request->project_id);

        $reservation=null;

        if($request->appendix){
            for ($j=0; $j < $project->appendix_count ; $j++) {
                $reservation[0][$j]=0;
            }
        }else
        for ($i=0; $i < $request->count ; $i++) {
            for ($j=0; $j < $project->floors_count ; $j++) {
                $reservation[$i][$j]=0;
            }
        }
        // $d=json_encode($reservation);
        // dd(json_decode($d));
        $request_data['reservation'] = json_encode($reservation);


        Apartment::create($request_data);

        LogSystem::success('تم إضافة '.$request->type.' بنجاح - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.apartments.index', ['projectId' => $request->project_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment=Apartment::find($id);
        // dd($apartment->reservation);
        return view('admin.apartments.check',compact('apartment'));
    }

    public function check($id)
    {


        $apartment=Apartment::find($id);
        $ar=json_decode($apartment->reservation);

        $ar[request()->apartment-1][request()->floor-1]=request()->status;
        $r=json_encode($ar);
        $apartment->update([
            'reservation'=>$r
        ]);
        return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $apartment = Apartment::find($id);
        if ($apartment) {

            $project = Project::find($apartment->project_id);
            return view('admin.apartments.edit', compact('apartment', 'project'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $try = Apartment::where('project_id', $request->project_id)->where('type', $request->type)->get();

        $apartment = Apartment::find($id);
        if ($try->count() > 0 && $try[0]->id != $apartment->id) {
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'نوع الشقق هذا موجود مسبقا']);
        }
        $request->validate([
            'type' => 'required',
            'area' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'details' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $apartment = Apartment::find($id);
        $request_data = $request->except(['img','appendix']);
        if ($request->img) {
            Storage::disk('local')->delete('public/images/'.$request->project_id.'/' . $apartment->img);

            $img = Image::make($request->img)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
                ->encode('jpg');

            Storage::disk('local')->put('public/images/'.$request->project_id.'/' . $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();
        }

        $apartment->update($request_data);
        $project=Project::find($apartment->project_id);

        LogSystem::info('تم تعديل '.$apartment->type.' بنجاح - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully updated !');
        return redirect()->route('admin.apartments.index', ['projectId' => $apartment->project_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $apartment = Apartment::find($id);
        Storage::disk('local')->delete('public/images/'.$apartment->project_id .'/' . $apartment->img);
        $apartment->delete();

        $project=Project::find($apartment->project_id);
        LogSystem::warning('تم حذف '.$apartment->type.' بنجاح - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully deleted !');
        return redirect()->route('admin.apartments.index', ['projectId' => $apartment->project_id]);
    }
}
