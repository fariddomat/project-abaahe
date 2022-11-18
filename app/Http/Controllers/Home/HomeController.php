<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        $projects=Project::where('status','complete')->latest()->limit(5)->get();
        $pending_projects=Project::where('status','pending')->latest()->limit(4)->get();
        $count=Project::count();
		return view('home.index', compact('projects','pending_projects' , 'count'));

    }
}
