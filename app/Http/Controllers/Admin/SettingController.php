<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\LogSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;
class SettingController extends Controller
{


    public function cover()
    {
        return view('admin.settings.cover');
    }

    public function change_cover(Request $request)
    {

        if ($request->cover3) {
            $image_path = public_path("home/images/3.jpg");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover3->move(public_path('/home/images'), '3.jpg');
        }
        if ($request->cover2) {
            $image_path = public_path("home/images/2.jpg");
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover2->move(public_path('/home/images'), '2.jpg');
        }
        if ($request->cover1) {
            $image_path = public_path("home/images/1.jpg");
            // dd($image_path);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->cover1->move(public_path('/home/images'), '1.jpg');
        }
        return redirect()->back();
    }


    public function logs()
    {
        $logs=LogSystem::latest()->paginate(5);
        return view('admin.settings.logs', compact('logs'));
    }

    public function settingsText()
    {
        return view('admin.settings.settings');
    }

    public function settings(Request $request)
    {
        setting($request->all())->save();

        Session::flash('success','Successfully added !');
        return redirect()->back();
    }

    public function social()
    {
        return view('admin.settings.social');
    }

}
