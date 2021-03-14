<?php

namespace App\Http\Controllers;

use App\Models\Projectss;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('projects.newpost', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $times = date("Y-m-d h:i:s");

        Projectss::create([
            'project_owner' => Auth::user()->name,
            'project_name' => $request->Project_name,
            'project_body' => $request->Project_body,
            'status' => $request->status,
            'due' => $request->due,
            'created_at' => $times,
            'updated_at' => $times,
        ]);
        return redirect('/dashboard')->with('message', 'Project Created !');
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
        $projects = DB::table('projects')->where('id', $id)->first();
        // dd($projects);
        $user = Auth::user();
        return view('projects.edit', compact('projects', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $times = date("Y-m-d h:i:s");
        DB::table('projects')->where('id', $request->id)->update([
            // 'project_owner' => Auth::user()->name,
            'project_name' => $request->Project_name,
            'project_body' => $request->Project_body,
            'status' => $request->status,
            'due' => $request->due,
            'updated_at' => $times,
        ]);
        return redirect('/project')->with('message', 'Project Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('projects')->where('id', $id)->delete();
        return redirect('/project')->with('message', 'Project Deleted !');
    }

    public function showindex()
    {
        $tproject = Projectss::all()->count();
        $complete = Projectss::all()->where('status', 'Complete')->count();
        $onprog = Projectss::all()->where('status', 'On Progress')->count();
        $OOS = Projectss::all()->where('status', 'Out Off Schedule')->count();
        $posts = Projectss::all();
        $ids = Projectss::all();
        $user = Auth::user();
        return view('projects.index', compact('user', 'tproject', 'complete', 'onprog', 'OOS', 'posts'));
    }
}
