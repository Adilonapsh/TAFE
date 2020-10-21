<?php

namespace App\Http\Controllers;

use Redis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis as FacadesRedis;

class SocketController extends Controller
{
    public function index()
    {
        return view('socket');
    }
}
