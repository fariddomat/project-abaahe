<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\LogSystem;
use App\Project;
use Illuminate\Http\Request;

use IlluminateSupportFacadesLog;

class DashboardController extends Controller
{

    public function index()
    {
        $categories=Category::count();
        $projects=Project::count();
        $logs=LogSystem::latest()->take(5)->get();
        return view('admin.index', compact('categories', 'projects', 'logs'));
    }
}
