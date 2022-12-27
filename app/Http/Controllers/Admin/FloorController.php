<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Floor;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    //

    public function index($id)
    {
        $project=Project::find($id);
        $apartments=Apartment::where('project_id',$project->id)->where('appendix', '<>', 'on')->orderBy('type')->get();
        if(!$project){
            abort(404);
        }
        return view('admin.floors.index', compact('project', 'apartments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'counts'=>'required',
        ]);
        $project=Project::find($request->project_id);
        foreach ($request->counts as $key => $count) {
            for ($i=0; $i < $count; $i++) {
                # code...
                Floor::create([
                'project_id'=>$project->id,
                'apartment_id'=>$request->apartment_id[$key],
                'floor_id'=>$request->floor_id[$key],
                // 'apartment_count'=>$count,
            ]);
     }
        }
        return redirect()->route('admin.apartments.index','projectId='.$project->id);
        // dd($request->project_id);
    }

    public function show($id)
    {
        $project=Project::find($id);
        if(!$project){
            abort(404);
        }
        $floors=Floor::where('project_id',$id)->get();
        // dd($floors);
        return view('admin.floors.show',compact('floors','project'));
    }

    public function update(Request $request)
    {
        $floor=Floor::find($request->id);
        $floor->update([
            'status'=>$request->status
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $floors=Floor::where('project_id', $id);
        $floors->delete();
        return redirect()->back();
    }
}
