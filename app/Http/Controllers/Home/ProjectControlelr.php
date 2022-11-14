<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectControlelr extends Controller
{
    //
    public function index(Request $request)
    {
        $category = (object)[
            'name' => 'كل التصنيفات'
        ];
        // dd($category->name);
        $projects = Project::orderBy('created_at')->paginate(6);
        return view('home.category', compact('category', 'projects'));
    }

    public function show($id)
    {

        $project=Project::find($id);
        // dd($project->image_path);
        if ($project) {
            # code...
        return view('home.project',compact('project'));

        } else {
            # code...
            abort(404);
        }
    }
}
