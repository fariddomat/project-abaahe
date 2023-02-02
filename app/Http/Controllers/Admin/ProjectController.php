<?php


namespace App\Http\Controllers\Admin;

use Mail;
use App\Apartment;
use App\Project;
use App\Http\Controllers\Controller;
use App\Category;
use App\Facility;
use App\LogSystem;
use App\ProjectImage;
use App\Promoter;
use App\Propertie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('sort_id', 'asc')->whenSearch(request()->search)
            ->paginate(30);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'category' => 'required',
                'name' => 'required|unique:projects,name',
                'address' => 'required',
                'scheme_name' => 'required',
                'status' => 'required',
                'status_percent' => 'required|numeric|min:0|max:100',
                'floors_count' => 'required|numeric|min:1',
                // 'floor_apartments_count' => 'required|numeric|min:2|max:4',

                // 'appendix_count' => 'required|numeric|min:0|default',
                'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'img' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg',

                'pdetails' => 'required',

                'f1' => 'required',
                'f2' => 'required',
                'f3' => 'required',
                'f4' => 'required',

            ]);

            $percent = 100;
            if ($request->status != 'complete') {
                $percent = $request->status_percent;
            }
            $project = Project::create([
                'category_id' => $request->category,
                'name' => $request->name,
                'address' => $request->address,
                'address_location' => $request->address_location,
                'scheme_name' => $request->scheme_name,
                'status' => $request->status,
                'status_percent' => $percent,
                'floors_count' => $request->floors_count,
                // 'floor_apartments_count' =>$request->floor_apartments_count,
                // 'apartments_count' => $request->floors_count * $request->floor_apartments_count,
                // 'appendix_count' => '2',
                // 'appendix_count' => $request->appendix_count,
                'details' => $request->details,
                'img' => $request->poster->hashName()
            ]);
            $poster = Image::make($request->poster)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('public')->put('images/' . $project->id . '/'  . $request->poster->hashName(), (string)$poster, 'public');

            foreach ($request->file('img') as $file) {

                $img = Image::make($file)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->encode('jpg');

                Storage::disk('public')->put('images/' . $project->id . '/' . $file->hashName(), (string)$img, 'public');

                ProjectImage::create([
                    'project_id' => $project->id,
                    'img' => $file->hashName()
                ]);
            }


            // propertie

            $propertie = Propertie::create([
                'project_id' => $project->id,
                'details' => $request->pdetails,
            ]);

            // facility
            $facility = Facility::create([
                'project_id' => $project->id,
                'f1' => $request->f1,
                'f2' => $request->f2,
                'f3' => $request->f3,
                'f4' => $request->f4,
                'f5' => $request->f5,
            ]);

            LogSystem::success('تم إضافة مشروع جديد بنجاح - اسم المشروع: ' . $request->name);

            Session::flash('success', 'Successfully Created !');
            return redirect()->route('admin.apartments.index', ['projectId' => $project->id]);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput($request->input())->withErrors(['msg' => $th->errorInfo[2]]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([

                'category' => 'required',
                'name' => 'required|unique:projects,name,' . $id,
                'address' => 'required',
                'scheme_name' => 'required',
                // 'floors_count' => 'required|numeric|min:1',
                // 'floor_apartments_count' => 'required|numeric|min:2|max:4',

                // 'appendix_count' => 'required|numeric|min:0',
                'status' => 'required',
                'status_percent' => 'required|numeric|min:0|max:100',


                'poster' => 'image|mimes:jpeg,png,jpg,gif,svg',
                // 'img' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg',

                'pdetails' => 'required',

                'f1' => 'required',
                'f2' => 'required',
                'f3' => 'required',
                'f4' => 'required',
            ]);




            $project = Project::find($id);

            if ($request->poster) {
                Storage::disk('public')->delete('images/' . $project->id . '/' . $project->img);
                $poster = Image::make($request->poster)
                    ->resize(570, 370)
                    ->encode('jpg');

                Storage::disk('public')->put('images/' . $project->id . '/' . $request->poster->hashName(), (string)$poster, 'public');
                $project->update([
                    'img' => $request->poster->hashName()
                ]);
            }

            if ($request->img) {

                $projectImages = ProjectImage::where('project_id', $project->id);
                // dd($projectImages);
                foreach ($projectImages->get() as $key => $item) {
                    // dd($item->img);
                    Storage::disk('public')->delete('images/' . $project->id . '/' . $item->img);
                }
                $projectImages->delete();
                foreach ($request->file('img') as $file) {
                    // dd(true);
                    $img = Image::make($file)
                        ->resize(null, 800, function ($constraint) {
                            $constraint->aspectRatio();
                        })
                        ->encode('jpg');

                    Storage::disk('public')->put('images/' . $project->id . '/' . $file->hashName(), (string)$img, 'public');

                    ProjectImage::create([
                        'project_id' => $project->id,
                        'img' => $file->hashName()
                    ]);
                }
            }

            $percent = 100;
            if ($request->status != 'complete') {
                $percent = $request->status_percent;
            }
            $project->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'address' => $request->address,
                'address_location' => $request->address_location,
                'scheme_name' => $request->scheme_name,
                'status' => $request->status,
                'status_percent' => $percent,
                'floors_count' => $request->floors_count,
                // 'floor_apartments_count' =>$request->floor_apartments_count,
                // 'apartments_count' => $request->floors_count * $request->floor_apartments_count,
                // 'appendix_count' => $request->appendix_count,
                'details' => $request->details,
            ]);

            // prpertie

            $propertie = Propertie::where('project_id', $project->id);
            $propertie->update([
                'details' => $request->pdetails,
            ]);

            // facility
            $facility = Facility::where('project_id', $project->id);
            $facility->update([
                'f1' => $request->f1,
                'f2' => $request->f2,
                'f3' => $request->f3,
                'f4' => $request->f4,
                'f5' => $request->f5,
            ]);
            LogSystem::info('تم تعديل مشروع - اسم المشروع: ' . $project->name);

            Session::flash('success', 'Successfully updated !');
            return redirect()->route('admin.projects.index');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput($request->input())->withErrors(['msg' => $th->errorInfo[2]]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }
        $facility = Facility::where('project_id', $project->id);
        $facility->delete();
        $propertie = Propertie::where('project_id', $project->id);
        $propertie->delete();
        $apartments = Apartment::where('project_id', $project->id);
        $apartments->delete();
        $projectImages = ProjectImage::where('project_id', $project->id);
        // dd($projectImages);
        foreach ($projectImages->get() as $key => $item) {
            // dd($item->img);
            Storage::disk('public')->delete('images/' . $project->id . '/' . $item->img);
        }
        $projectImages->delete();
        Storage::disk('public')->delete('images/' . $project->id . '/' . $project->img);
        $project->delete();

        LogSystem::warning('تم حذف المشروع - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully deleted !');
        return redirect()->route('admin.projects.index');
    }

    public function sort(Request $request)
    {
        // dd($request->order);
        $projects = Project::all();
        foreach ($projects as $project) {
            foreach ($request->order as $order) {
                if ($order['id'] == $project->id) {
                    $project->update(['sort_id' => $order['position']]);
                }
            }
        }
        return response('Update Successfully.', 200);
    }
}
