<?php

namespace App\Http\Controllers;

use App\Models\Projectss;
use App\Models\CCTV;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tproject = Projectss::all()->count();
        $complete = Projectss::all()->where('status', 'Complete')->count();
        $onprog = Projectss::all()->where('status', 'On Progress')->count();
        $OOS = Projectss::all()->where('status', 'Out Off Schedule')->count();
        $posts = Projectss::all();
        $ids = Projectss::all();
        $user = Auth::user();
        $tcctv = CCTV::all()->count();
        $cActive = DB::table('cctvs')->Where([
            ['cctv_owner', Auth::user()->name],
            ['status', 'Active'],
        ])->count();
        $cMaintenance = DB::table('cctvs')->Where([
            ['cctv_owner', Auth::user()->name],
            ['status', 'Maintenance'],
        ])->count();
        $cNonactive = DB::table('cctvs')->Where([
            ['cctv_owner', Auth::user()->name],
            ['status', 'Non active'],
        ])->count();
        $cuser = CCTV::all()->where('cctv_owner', Auth::user()->name,);
        $cctvid = DB::table('cctvs')->Where([
            ['cctv_owner', Auth::user()->name]
        ])->get();
        $usrcctvid = DB::table('cctvs')->Where([
            ['cctv_owner', Auth::user()->name]
        ])->count();
        $user = Auth::user();

        return view('dashboard.dashboard', compact('user', 'tproject', 'complete', 'onprog', 'OOS', 'posts', 'cctvid', 'tcctv', 'cActive', 'cMaintenance', 'cNonactive', 'cuser', 'usrcctvid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
