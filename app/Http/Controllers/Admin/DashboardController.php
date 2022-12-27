<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\LogSystem;
use App\ProfileDownload;
use App\Project;
use Illuminate\Http\Request;

use IlluminateSupportFacadesLog;

class DashboardController extends Controller
{

    public function index()
    {
        $categories=Category::count();
        $projects=Project::count();
        $pcounter=ProfileDownload::find(1);
        $counter=0;
        if ($pcounter) {
            $counter=$pcounter->count;
        }

        $logs=LogSystem::latest()->take(5)->get();
        return view('admin.index', compact('categories', 'projects', 'counter', 'logs'));
    }
}
