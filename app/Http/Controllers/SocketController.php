<?php

namespace App\Http\Controllers;

use Redis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis as FacadesRedis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocketController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('nodemcu', compact('user'));
    }
}
