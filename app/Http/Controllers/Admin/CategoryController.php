<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Category;
use App\LogSystem;
use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->whenSearch(request()->search)
            ->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $request_data = $request->except(['img']);

        $img = Image::make($request->img)
            ->resize(570, 370)
            ->encode('jpg');

        Storage::disk('public')->put('images/' . $request->img->hashName(), (string)$img, 'public');
        $request_data['img'] = $request->img->hashName();

        Category::create($request_data);
        LogSystem::success('تم إضافة تصنيف جديد بنجاح : ' . $request->name);
        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        if(!$category){
            abort(404);
        }
        return view('admin.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|unique:categories,name,' . $id,
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $category=Category::find($id);
        $request_data = $request->except(['img']);
        if ($request->img) {
            Storage::disk('public')->delete('images/' . $category->img);

            $img = Image::make($request->img)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('public')->put('images/' . $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();

        }

        $category->update($request_data);
        LogSystem::info('تم تعديل تصنيف بنجاح : ' . $request->name);

        Session::flash('success','Successfully updated !');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        if(!$category){
            abort(404);
        }
        Storage::disk('public')->delete('images/' . $category->img);
        $category->delete();
        LogSystem::info('تم حذف تصنيف بنجاح : ' . $category->name);
        Session::flash('success','Successfully deleted !');
        return redirect()->route('admin.categories.index');
    }
}
