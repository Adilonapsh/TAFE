<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Reset Password</title>
</head>
<body class="h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('Assets/Images/Login_element.svg') }}" style="margin-top: -20px; margin-left: -30px; display:fixed;" width="460"  >
                <div class="welcomeback" style="margin-top: -450px; margin-left: 60px; color:white;">
                    <h1><b>Welcome Back !</b></h1>
                    <p class="mt3" style="width: 290px; text-align:center;margin-bottom: 30px;">Sudah Ingat passwordnya ?</p>
                    <a href="{{ route('login') }}" class="mr-auto" style="background-color: white; padding:10px 20px; border-radius:10px; margin-left:100px; width:50px"><b>Login</b></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="justify-content-center d-flex" style="margin-top: 200px;" >
                    <div class="login-card w-100" style="text-align:center;">
                        <h1 style="color:#3F65E0;margin-bottom:30px;"><b>Forgot Password</b></h1>
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
                        <small class="text-muted" style="margin-bottom:70px;">Verify Your Email.</small><br>
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror mb-3" name="email"  required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror mb-3" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input id="password-confirm" type="password" placeholder="Password Confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                            <button type="submit" class="btn btn-primary" style=" color: white;background-color: #3F65E0; padding:10px 20px; border-radius:5px; border:none;">
                                {{ __('Reset') }}
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

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
