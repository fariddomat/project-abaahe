<?php

namespace App\Http\Controllers\Admin;

use Mail;
use App\Http\Controllers\Controller;
use App\Project;
use App\Promoter;
use Illuminate\Http\Request;

class PromoterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promoters=Promoter::orderBy('name', 'asc')->whenSearch(request()->search)->paginate(30);
        return view('admin.promoters.index',compact('promoters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promoters.create');
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
            'name'=>'required',
            'email'=>'required|email',
        ]);

        Promoter::create($request->all());
        return redirect()->route('admin.promoters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promoter=Promoter::find($id);
        if($promoter){
            return view('admin.promoters.edit', compact('promoter'));
        }
        else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);

        $promoter=Promoter::find($id);
        $promoter->update($request->all());
        return redirect()->route('admin.promoters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promoter=Promoter::find($id);
        if($promoter){
            $promoter->delete();
            return redirect()->back();
        }else{
            abort(404);
        }
    }

    public function notify()
    {
        $projects=Project::all();
        return view('admin.promoters.notify', compact('projects'));
    }

    public function send_mail(Request $request )
    {
        $request->validate([
            'details'=> 'required'
        ]);
        $promoters = Promoter::all();
        foreach ($promoters as $key => $promoter) {
            $info = array(
                'name' => $promoter->name,
                'project' => $request->project,
                'details'=> $request->details
            );
            Mail::send('mail', $info, function ($message) use ($promoter) {
                $message->to($promoter->email, $promoter->name)
                    ->subject('إشعار مشروع جديد من أباهي');
                $message->from('tahdeeth@abahee.com', 'Abahee');
            });

            // echo "Successfully sent the email";
        }

        return redirect()->route('admin.projects.index');
    }


}
