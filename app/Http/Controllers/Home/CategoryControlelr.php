<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class CategoryControlelr extends Controller
{
    //
    public function index()
    {

        $categories=Category::paginate(24);
        return view('home.categories', compact('categories'));
    }

   public function show($id)
   {

    $category=Category::find($id);
    if ($category) {
        # code...
    $projects=Project::where('category_id',$id)->orderBy('sort_id', 'asc')->paginate(30);
    return view('home.category',compact('category','projects'));

    } else {
        # code...
        abort(404);
    }

   }
}
