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
        $try = Apartment::where('project_id', $request->project_id)->where('type', $request->type)->get();

        if ($try->count() > 0) {
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'نوع الشقق هذا موجود مسبقا']);
        }
        $request->validate([
            'type' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'living_rooms' => 'required|numeric|min:0',
            'bed_rooms' => 'required|numeric|min:0',
            'dining_rooms' => 'required|numeric|min:0',
            'kitchens' => 'required|numeric|min:0',
            'servant_rooms' => 'required|numeric|min:0',
            'bathrooms' => 'required|numeric|min:0',
            'parking' => 'required|numeric|min:0',
            'img' => 'required',
        ]);

        $request_data = $request->except(['img']);

        $img = Image::make($request->img)
            ->resize(570, 370)
            ->encode('jpg');

        Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
        $request_data['img'] = $request->img->hashName();

        Apartment::create($request_data);
        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.apartments.index', ['projectId' => $request->project_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
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

        $apartment=Apartment::find($id);
        if ($try->count() > 0 && $try[0]->id != $apartment->id) {
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'نوع الشقق هذا موجود مسبقا']);
        }
        $request->validate([
            'type' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'living_rooms' => 'required|numeric|min:0',
            'bed_rooms' => 'required|numeric|min:0',
            'dining_rooms' => 'required|numeric|min:0',
            'kitchens' => 'required|numeric|min:0',
            'servant_rooms' => 'required|numeric|min:0',
            'bathrooms' => 'required|numeric|min:0',
            'parking' => 'required|numeric|min:0',
        ]);

        $apartment=Apartment::find($id);
        $request_data = $request->except(['img']);
        if ($request->img) {
            Storage::disk('local')->delete('public/images/' . $apartment->img);

            $img = Image::make($request->img)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();

        }

        $apartment->update($request_data);

        Session::flash('success','Successfully updated !');
        return redirect()->route('admin.apartments.index', ['projectId'=>$apartment->project_id]);
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
        Storage::disk('local')->delete('public/images/' . $apartment->img);
        $apartment->delete();

        Session::flash('success', 'Successfully deleted !');
        return redirect()->route('admin.apartments.index', ['projectId' => $apartment->project_id]);
    }
}
