<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{asset('img/favicon.ico')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/animate/animate.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/css-hamburgers/hamburgers.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('auth/vendor/select2/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/main.css')}}">

</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{asset('auth/images/img-01.png')}}" alt="IMG">
            </div>
            <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                @csrf
                <span class="login100-form-title">
Nessa Login
</span>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required
                           autocomplete="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">

<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" required placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
                <div class="text-center p-t-12">

                </div>
                <div class="text-center p-t-136">

                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('auth/vendor/jquery/jquery-3.2.1.min.js')}}"
        type="45bb608da0cb024b1ef648ce-text/javascript"></script>

<script src="{{asset('auth/vendor/bootstrap/js/popper.js')}}" type="45bb608da0cb024b1ef648ce-text/javascript"></script>
<script src="{{asset('auth/vendor/bootstrap/js/bootstrap.min.js')}}"
        type="45bb608da0cb024b1ef648ce-text/javascript"></script>

<script src="{{asset('auth/vendor/select2/select2.min.js')}}" type="45bb608da0cb024b1ef648ce-text/javascript"></script>

<script src="{{asset('auth/vendor/tilt/tilt.jquery.min.js')}}" type="45bb608da0cb024b1ef648ce-text/javascript"></script>
<script type="45bb608da0cb024b1ef648ce-text/javascript">
		$('.js-tilt').tilt({
			scale: 1.1
		})


</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="45bb608da0cb024b1ef648ce-text/javascript"></script>
<script type="45bb608da0cb024b1ef648ce-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');


</script>

<script src="{{asset('js/main.js')}}" type="45bb608da0cb024b1ef648ce-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="45bb608da0cb024b1ef648ce-|49" defer=""></script>
</body>
</html>

{{--@extends('layouts.app')--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
