<?php

namespace App\Http\Controllers\Home;

use App\Contact;
use App\Http\Controllers\Controller;
use App\ProfileDownload;
use App\Project;
use App\Promoter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    //
    public function index()
    {

        $projects = Project::latest()->get();
        // $pending_projects=Project::where('status','pending')->latest()->limit(4)->get();
        $count = Project::count();
        return view('home.index', compact('projects', 'count'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->back();
    }

    public function contactPage()
    {
        return view('home.contact');
    }

    public function promoters(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:promoters,email,'
        ]);

        Promoter::create([
            'name' => $request->email,
            'email' => $request->email,

        ]);

        return redirect()->back();
    }

    public function profileDownload()
    {
        $counter = ProfileDownload::find(1);
        if ($counter) {
            $counter->count = $counter->count + 1;
            $counter->save();
        } else {
            ProfileDownload::create([
                'id' => '1',
                'count' => '1'
            ]);
        }
        $file = public_path() . "/download/profile.pdf";
        if (file_exists($file)) {
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($file, 'profile.pdf', $headers);
        }
    }
}
