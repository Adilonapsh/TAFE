<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class CCTV
{
    public static function Get_Data($url, $timeout = 3)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 2);
        $data = curl_exec($ch);
        if (curl_errno($ch)) {
            // throw new Exception (curl_errno($ch));
            // echo "<br>";
            // echo "I'm Sorry !!";
        }
        curl_close($ch);
        return $data;
    }
}
