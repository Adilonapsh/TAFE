<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CCTV;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CCTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('cctv', compact('user', 'cctvid', 'tcctv', 'cActive', 'cMaintenance', 'cNonactive', 'cuser', 'usrcctvid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cctv.create');
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

        CCTV::create([
            'cctv_owner' => Auth::user()->name,
            'cctv_name' => $request->Cctv_name,
            'cctv_ip' => $request->Cctv_ip,
            'status' => $request->status,
            'created_at' => $times,
        ]);
        return redirect('/cctv');
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

        $CCTV = DB::table('cctvs')->where('id', $id)->first();
        // dd($CCTVS);
        $user = Auth::user();

        return view('cctv.edit', compact('user', 'CCTV'));
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

        DB::table('cctvs')->where('id', $request->id)->update([
            'cctv_name' => $request->Cctv_name,
            'cctv_ip' => $request->Cctv_ip,
            'status' => $request->status,
            'updated_at' => $times,
        ]);
        return redirect('/cctv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cctvs')->where('id', $id)->delete();
        return redirect('/cctv')->with('message', 'CCTV Deleted !');
    }
}
