<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Register</title>
</head>
<body class="h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('Assets/Images/Login_element.svg') }}" style="margin-top: -20px; margin-left: -30px; display:fixed;" width="460"  >
                <div class="welcomeback" style="margin-top: -450px; margin-left: 60px; color:white;">
                    <h1><b>Welcome Back !</b></h1>
                    <p class="mt3" style="width: 290px; text-align:center;margin-bottom: 30px;">Sudah Punya Akun ?</p>
                    <a href="{{ route('login') }}" class="mr-auto" style="background-color: white; padding:10px 20px; border-radius:10px; margin-left:100px; width:50px"><b>Login</b></a>
                </div>
            </div>
            <div class="col-lg-6 vh-100">
                <div class="justify-content-center d-flex" style="margin-top: 130px;" >
                    <div class="login-card" style="text-align:center;">
                        <h1 style="color:#3F65E0;margin-bottom:30px;"><b>Register</b></h1>
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
                        <small class="text-muted" style="margin-bottom:30px;">Silahkan Buat Akun Terlebih Dahulu Untuk Melanjutkan</small><br>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input id="name" type="text" style="margin-bottom: 20px; margin-top:10px;" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input id="username" type="text" style="margin-bottom: 20px; margin-top:10px;" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input id="email" type="email" style="margin-bottom: 20px; " placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input id="password" type="password" style="margin-bottom: 20px; " placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input id="password-confirm" type="password" style="margin-bottom: 20px; " placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                            <button type="submit" class="btn btn-primary" style=" color: white;background-color: #3F65E0; padding:10px 20px; border-radius:5px; border:none;">
                                {{ __('Register') }}
                            </button>   
                            {{-- <button type="submit" style=" color: white;background-color: #3F65E0; padding:10px 20px; border-radius:5px; border:none;">
                               <b>Register</b>
                            </button> --}}
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>