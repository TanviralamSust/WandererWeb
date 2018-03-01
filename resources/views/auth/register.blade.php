{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ $user_id }}" required autofocus>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">--}}
                            {{--<label for="contact" class="col-md-4 control-label">Contact Num:</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autofocus>--}}

                                {{--@if ($errors->has('contact'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('contact') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">--}}
                            {{--<label class="col-md-4 control-label">Type</label>--}}

                            {{--<div class="col-md-3">--}}
                                {{--<label for="user" class="radio-inline">Agent</label>--}}
                                    {{--<input type="radio" id="user" checked="checked"  class="form-control" name="type" value="agent">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3">--}}
                                {{--<label for="user" class="radio-inline"> Renter</label>--}}
                                {{--<input type="radio"  id="user" class="form-control" name="type" value="renter">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href={{ URL::asset('public_register/vendor/bootstrap/css/bootstrap.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/vendor/animate/animate.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/vendor/css-hamburgers/hamburgers.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/vendor/select2/select2.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/css/util.css")}}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset("public_register/css/main.css")}}>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src={{ URL::asset("public_register/images/img-01.png")}} alt="IMG">
            </div>

          <!--  <form class="login100-form validate-form"> -->
            <form class="login100-form validate-form" method="post" action="/register" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<span class="login100-form-title">
						Member Login
					</span>

                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ $user_id }}" required autofocus>

                <img src={{ URL::asset("public_register/images/default.png") }}  id="profile_pic" style="width: 150px; height: 150px; margin-right: 25px; margin-bottom: 5px;">
                <label id="change">Change Profile Image</label>
                <input type="file" id="image_file" name="image" style="margin-bottom: 5px">

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="name" placeholder="Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="phone" placeholder="Contact Number">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="language" placeholder="Language">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="address" placeholder="Address">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>



                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="country" placeholder="Country">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="postal_code" placeholder="Postal Code">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <img src={{ URL::asset("public_register/images/default.png") }}  id="scan_pic" style="width: 150px; height: 150px; margin-right: 25px; margin-bottom: 5px;">
                <label id="change">Upload Scan Image</label>
                <input type="file" id="scan_file" name="scan_copy" style="margin-bottom: 5px">

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<script src={{ URL::asset('public_register/vendor/jquery/jquery-3.2.1.min.js')}}></script>
<!--===============================================================================================-->
<script src={{ URL::asset('public_register/vendor/bootstrap/js/popper.js')}}></script>
<script src={{ URL::asset('public_register/vendor/bootstrap/js/bootstrap.min.js')}}></script>
<!--===============================================================================================-->
<script src={{ URL::asset('public_register/vendor/select2/select2.min.js')}}></script>
<!--===============================================================================================-->
<script src={{ URL::asset('public_register/vendor/tilt/tilt.jquery.min.js')}}></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src={{ URL::asset('public_register/js/main.js')}}></script>

<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#profile_pic').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image_file").change(function() {
        readURL(this);
    });

    function scanreadURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#scan_pic').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#scan_file").change(function() {
        scanreadURL(this);
    });

</script>

<!--===============================================================================================-->

</body>
</html>