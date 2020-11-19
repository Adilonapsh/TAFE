<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadFile(Request $request)
    {
        return response()->streamDownload(function () {
            echo file_get_contents('http://192.168.43.205:8080/v//Adilonapsh_2013-11-04_07-51-1.mkv');
        }, 'Vids.mkv');
    }
}
