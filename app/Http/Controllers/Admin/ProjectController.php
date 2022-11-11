<?php


namespace App\Http\Controllers\Admin;
use App\Project;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
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
        $projects = Project::orderBy('name', 'asc')->whenSearch(request()->search)
            ->paginate(5);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
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
        $request->validate([
            'category'=>'required',
            'name' => 'required|unique:projects,name',
            'address' => 'required',
            'scheme_name' => 'required',
            'floors_count' => 'required|numeric|min:1',
            'front_apartments_count' => 'required|numeric|min:1',
            'back_apartments_count' => 'required|numeric|min:1',
            'appendix_count' => 'required|numeric|min:0',
            'img' => 'required',
        ]);

        $request_data = $request->except(['img','category']);

        $img = Image::make($request->img)
            ->resize(570, 370)
            ->encode('jpg');

        Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
        $request_data['img'] = $request->img->hashName();
        $request_data['category_id'] = $request->category;

        Project::create($request_data);
        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.projects.index');
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
        $project=Project::find($id);
        $categories=Category::all();
        return view('admin.projects.edit',compact('project', 'categories'));

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
        $request->validate([

            'category'=>'required',
            'name'=>'required|unique:projects,name,' . $id,
            'address' => 'required',
            'scheme_name' => 'required',
            'floors_count' => 'required|numeric|min:1',
            'front_apartments_count' => 'required|numeric|min:1',
            'back_apartments_count' => 'required|numeric|min:1',
            'appendix_count' => 'required|numeric|min:0',
        ]);

        $project=Project::find($id);
        $request_data = $request->except(['img', 'category']);
        if ($request->img) {
            Storage::disk('local')->delete('public/images/' . $project->img);

            $img = Image::make($request->img)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('local')->put('public/images/' . $request->img->hashName(), (string)$img, 'public');
            $request_data['img'] = $request->img->hashName();

        }

        $request_data['category_id'] = $request->category;
        $project->update($request_data);

        Session::flash('success','Successfully updated !');
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        Storage::disk('local')->delete('public/images/' . $project->img);
        $project->delete();

        Session::flash('success','Successfully deleted !');
        return redirect()->route('admin.projects.index');
    }
}
