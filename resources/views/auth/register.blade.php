
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ __('Register') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('admin/login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url({{asset('admin/login/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						Register
					</span>
            </div>

            <form class="login100-form validate-form" method="post" action="{{route('register')}}">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">{{ __('Name') }}</span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" >
                    @error('name')
                    <span class="focus-input100" role="alert">
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">{{ __('Username') }}</span>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" >
                    @error('username')
                    <span class="focus-input100" role="alert">
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">{{ __('E-Mail') }}</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                    @error('email')
                    <span class="focus-input100" role="alert">
                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">{{ __('Password') }}</span>
                    <input id="password" type="password"class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                    <span class="focus-input100" role="alert">

                    </span>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">{{ __('Confirm Password') }}</span>
                    <input id="password-confirm" type="password"class="form-control @error('password') is-invalid @enderror"  name="password_confirmation">

                    <span class="focus-input100" role="alert">

                    </span>

                </div>


                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('admin/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('admin/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('admin/login/js/main.js')}}"></script>

</body>
</html>
