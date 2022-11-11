<?php

namespace App\Http\Controllers\Admin;
use App\Project;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Facility;

class FacilityController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $project = Project::find($request->projectId);
        if ($project) {
            $facilities = Facility::where('project_id', $project->id)->paginate(5);
            return view('admin.facilities.index', compact('project', 'facilities'));
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
            return view('admin.facilities.create', compact('project'));
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
            'title' => 'required',
            'details' => 'required',
            'img' => 'required',
        ]);

        $request_data = $request->except(['img']);

        $img = Image::make($request->img)
            ->resize(50, 50)
            ->encode('jpg');

        Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
        $request_data['img'] = $request->img->hashName();

        Facility::create($request_data);
        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.facilities.index', ['projectId' => $request->project_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $facility = Facility::find($id);
        if ($facility) {

            $project = Project::find($facility->project_id);
            return view('admin.facilities.edit', compact('facility', 'project'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        $facility=Facility::find($id);
        $request_data = $request->except(['img']);
        if ($request->img) {
            Storage::disk('local')->delete('public/images/' . $facility->img);

            $img = Image::make($request->img)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();

        }

        $facility->update($request_data);

        Session::flash('success','Successfully updated !');
        return redirect()->route('admin.facilities.index', ['projectId'=>$facility->project_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $facility = Facility::find($id);
        Storage::disk('local')->delete('public/images/' . $facility->img);
        $facility->delete();

        Session::flash('success', 'Successfully deleted !');
        return redirect()->route('admin.facilities.index', ['projectId' => $facility->project_id]);
    }
}
