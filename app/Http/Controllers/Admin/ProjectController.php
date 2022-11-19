<?php


namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Project;
use App\Http\Controllers\Controller;
use App\Category;
use App\Facility;
use App\LogSystem;
use App\ProjectImage;
use App\Propertie;
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
        $categories = Category::all();
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
            'category' => 'required',
            'name' => 'required|unique:projects,name',
            'address' => 'required',
            'scheme_name' => 'required',
            'status' => 'required',
            'status_percent' => 'required|numeric|min:0|max:100',
            'floors_count' => 'required|numeric|min:1',
            'apartments_count' => 'required|numeric|min:1',

            'appendix_count' => 'required|numeric|min:0',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'img' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg',

            'pdetails' => 'required',

            'f1' => 'required',
            'f2' => 'required',
            'f3' => 'required',
            'f4' => 'required',

        ]);

      $percent = 100;
        if ($request->status != 'complete') {
            $percent = $request->status_percent;
        }
        $project = Project::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'address' => $request->address,
            'scheme_name' => $request->scheme_name,
            'status' => $request->status,
            'status_percent' => $percent,
            'floors_count' => $request->floors_count,
            'apartments_count' => $request->apartments_count,
            'appendix_count' => $request->appendix_count,
            'details' => $request->details,
            'img' => $request->poster->hashName()
        ]);
        $poster = Image::make($request->poster)
            ->resize(570, 370)
            ->encode('jpg');

        Storage::disk('local')->put('public/images/' . $project->id . '/'  . $request->poster->hashName(), (string)$poster, 'public');

        foreach ($request->file('img') as $file) {

            $img = Image::make($file)
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg');

            Storage::disk('local')->put('public/images/' . $project->id . '/' . $file->hashName(), (string)$img, 'public');

            ProjectImage::create([
                'project_id' => $project->id,
                'img' => $file->hashName()
            ]);
        }


        // propertie

        $propertie = Propertie::create([
            'project_id' => $project->id,
            'details' => $request->pdetails,
        ]);

        // facility
        $facility = Facility::create([
            'project_id' => $project->id,
            'f1' => $request->f1,
            'f2' => $request->f2,
            'f3' => $request->f3,
            'f4' => $request->f4,
            'f5' => $request->f5,
        ]);

        LogSystem::success('تم إضافة مشروع جديد بنجاح - اسم المشروع: ' . $request->name);

        Session::flash('success', 'Successfully Created !');
        return redirect()->route('admin.apartments.index', ['projectId' => $project->id]);
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
        $project = Project::find($id);
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
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

            'category' => 'required',
            'name' => 'required|unique:projects,name,' . $id,
            'address' => 'required',
            'scheme_name' => 'required',
            'floors_count' => 'required|numeric|min:1',
            'apartments_count' => 'required|numeric|min:1',

            'appendix_count' => 'required|numeric|min:0',
            'status' => 'required',
            'status_percent' => 'required|numeric|min:0|max:100',


            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg',
            // 'img' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg',

            'pdetails' => 'required',

            'f1' => 'required',
            'f2' => 'required',
            'f3' => 'required',
            'f4' => 'required',
        ]);




        $project = Project::find($id);

        if ($request->poster) {
            Storage::disk('local')->delete('public/images/' . $project->id . '/' . $project->img);
            $poster = Image::make($request->poster)
                ->resize(570, 370)
                ->encode('jpg');

            Storage::disk('local')->put('public/images/' . $project->id . '/' . $request->poster->hashName(), (string)$poster, 'public');
            $project->update([
                'img' => $request->poster->hashName()
            ]);
        }

        if ($request->img) {

            $projectImages = ProjectImage::where('project_id', $project->id);
            // dd($projectImages);
            foreach ($projectImages->get() as $key => $item) {
                // dd($item->img);
                Storage::disk('local')->delete('public/images/' . $project->id . '/' . $item->img);
            }
            $projectImages->delete();
            foreach ($request->file('img') as $file) {
                // dd(true);
                $img = Image::make($file)
                    ->resize(null, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->encode('jpg');

                Storage::disk('local')->put('public/images/' . $project->id . '/' . $file->hashName(), (string)$img, 'public');

                ProjectImage::create([
                    'project_id' => $project->id,
                    'img' => $file->hashName()
                ]);
            }
        }

        $percent = 100;
        if ($request->status != 'complete') {
            $percent = $request->status_percent;
        }
        $project->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'address' => $request->address,
            'scheme_name' => $request->scheme_name,
            'status' => $request->status,
            'status_percent' => $percent,
            'floors_count' => $request->floors_count,
            'apartments_count' => $request->apartments_count,

            'appendix_count' => $request->appendix_count,
            'details' => $request->details,
        ]);

        // prpertie

        $propertie = Propertie::where('project_id', $project->id);
        $propertie->update([
            'details' => $request->pdetails,
        ]);

        // facility
        $facility = Facility::where('project_id', $project->id);
        $facility->update([
            'f1' => $request->f1,
            'f2' => $request->f2,
            'f3' => $request->f3,
            'f4' => $request->f4,
            'f5' => $request->f5,
        ]);
        LogSystem::info('تم تعديل مشروع - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully updated !');
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
        $project = Project::find($id);
        $facility = Facility::where('project_id', $project->id);
        $facility->delete();
        $propertie = Propertie::where('project_id', $project->id);
        $propertie->delete();
        $apartments = Apartment::where('project_id', $project->id);
        $apartments->delete();
        $projectImages = ProjectImage::where('project_id', $project->id);
        // dd($projectImages);
        foreach ($projectImages->get() as $key => $item) {
            // dd($item->img);
            Storage::disk('local')->delete('public/images/' . $project->id . '/' . $item->img);
        }
        $projectImages->delete();
        Storage::disk('local')->delete('public/images/' . $project->id . '/' . $project->img);
        $project->delete();

        LogSystem::warning('تم حذف المشروع - اسم المشروع: ' . $project->name);

        Session::flash('success', 'Successfully deleted !');
        return redirect()->route('admin.projects.index');
    }
}
