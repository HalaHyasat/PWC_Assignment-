@extends('layouts.app')

@section('title')
    Register A new user
@endsection
@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more login100-more1" style="background-image: url({{asset('images/bg2.jpg')}}); "></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form action="{{route('register')}}" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Register User
					</span>
                    @csrf



                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required: example">
                        <span class="label-input100">Name</span>
                        <input class="input100" type="text" name="name" placeholder="Full name..." value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Email addess..." value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>
                        </div>
                            <a href="{{url('/login')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                Login now
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
