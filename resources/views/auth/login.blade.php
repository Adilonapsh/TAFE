<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('Assets/Images/Login_element.svg') }}" style="margin-top: -20px; margin-left: -30px; display:fixed; img-fluid" width="463"  >
                <div class="welcomeback" style="margin-top: -450px; margin-left: 60px; color:white;">
                    <h1><b>Welcome Back !</b></h1>
                    <p class="mt3" style="width: 290px; text-align:center;margin-bottom: 30px;">Belum Punya Akun ?</p>
                    <a href="{{ route('register') }}" style="background-color: white; padding:10px 20px; border-radius:10px; margin-left:90px"><b>Register</b></a>
                </div>
            </div>
            <div class="col-lg-6 border-success">
                <div class="justify-content-center d-flex" style="margin-top:150px">
                    <div class="login-card" style="text-align:center;">
                        <h1 style="color:#3F65E0;margin-bottom:30px;"><b>Login</b></h1>
                        <div class="row justify-content-center mb-4" >
                            <div class="col-3">
                                Facebook
                            </div>
                            <div class="col-3">
                                Google
                            </div>
                            <div class="col-3">
                                Twitter
                            </div>
                        </div>
                        <small class="text-muted" style="margin-bottom:30px;">Silahkan Login Untuk Melanjutkan</small><br>
                        @if (session('errors'))
                            <div class="alert alert-danger" style="margin-bottom:0px" role="alert">
                                {{ __('Username atau password yang anda masukkan salah') }}
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input type="text" name="username" id="username" placeholder="Username"style="margin-top:30px;width:380px;height:40px;border:none;border-radius:5px;background-color:#F5F5F5;padding:0 20px;" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" name="password" id="password" placeholder="Password"style="margin-top:20px;margin-bottom:20px;width:380px;height:40px;border:none;border-radius:5px;background-color:#F5F5F5;padding:0 20px;" required autocomplete="current-password"><br>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            <button type="submit" class="mr-auto" style=" color: white;background-color: #3F65E0; padding:10px 20px; border-radius:10px; border:none;">
                               <b>{{ __('Login') }}</b>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>