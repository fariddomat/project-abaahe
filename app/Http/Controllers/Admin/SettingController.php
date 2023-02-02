<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\LogSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        $logs = LogSystem::latest()->paginate(50);
        return view('admin.settings.logs', compact('logs'));
    }

    public function settingsText()
    {
        return view('admin.settings.settings');
    } 

    public function settings(Request $request)
    {
        setting($request->all())->save();

        Session::flash('success', 'Successfully added !');
        return redirect()->back();
    }

    public function social()
    {
        return view('admin.settings.social');
    }

    public function changePassword()
    {
        $user = Auth::user();
        return view('admin.settings.changePassword')->with([
            'user' => $user
        ]);
    }

    public function changePass(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('admin.home');
    }

    public function contact()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('admin.settings.contacts', compact('contacts'));
    }

    public function exportCSV(Request $request)
    {
        $fileName = 'contacts.csv';
        $contacts = Contact::all();

        $headers = array(
            "Content-Encoding" => "utf8",
            "Content-type"        => "text/csv; charset=utf8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('name', 'email', 'phone', 'message', 'created_at');

        $callback = function () use ($contacts, $columns) {
            $file = fopen('php://output', 'w');

            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));
            fputcsv($file, $columns);

            foreach ($contacts as $contact) {
                $row['name']  = $contact->name;
                $row['email']  = $contact->email;
                $row['phone']  = $contact->phone;
                $row['message']  = $contact->message;
                $row['created_at']  = $contact->created_at;

                fputcsv($file, array($row['name'], $row['email'], $row['phone'], $row['message'], $row['created_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function markAsRead($id)
    {
        $contacts = Contact::find($id);
        $contacts->update([
            'status' => 'read'
        ]);
        return redirect()->back();
    }
}
