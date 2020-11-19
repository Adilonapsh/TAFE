<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['username', 'password']);
        if (!$token = auth()->attempt($creds)) {
            return response()->json([
                'success' => false,
                'message' => 'Login failed',
            ]);
        }
        $user = Auth::user();
        $success =  $user->createToken('nApp')->accessToken;
        return response()->json([
            'success' => true,
            'token' => $success,
            'user' => Auth::user()
        ]);
    }
    public function register(Request $request)
    {
        $password  = Hash::make($request->password);
        try {
            User::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => $password,
            ]);
            return $this->login($request);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '' . $e,
            ]);
        }
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'Logout Success',
        ]);
    }
}
