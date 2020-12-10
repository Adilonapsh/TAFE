<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectss;
use App\Models\CCTV;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function project(Request $request)
    {
        $times = date("Y-m-d h:i:s");
        // $creds = $request->only(['project_name', 'project_body', 'status', 'due']);
        Projectss::create([
            'project_owner' => Auth::user()->name,
            'project_name' => $request->project_name,
            'project_body' => $request->project_body,
            'status' => $request->status,
            'due' => $request->due,
            'created_at' => $times,
            'updated_at' => $times,
        ]);
        $user = Auth::user();
        return response()->json([
            'success' => true,
            'project' => [
                'project_owner' => Auth::user()->name,
                'project_name' => $request->project_name,
                'project_body' => $request->project_body,
                'status' => $request->status,
                'due' => $request->due,
                'created_at' => $times,
                'updated_at' => $times,
            ]
        ]);
    }
    public function cctv(Request $request)
    {
        $times = date("Y-m-d h:i:s");

        CCTV::create([
            'cctv_owner' => Auth::user()->name,
            'cctv_name' => $request->cctv_name,
            'cctv_ip' => $request->cctv_ip,
            'status' => $request->status,
            'created_at' => $times,
        ]);
        return response()->json([
            'success' => true,
            'project' => [
                'cctv_owner' => Auth::user()->name,
                'cctv_name' => $request->cctv_name,
                'cctv_ip' => $request->cctv_ip,
                'status' => $request->status,
                'created_at' => $times,
            ]
        ]);
    }
}
