@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection
@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more login100-more1" style="background-image: url({{asset('images/bg2.jpg')}}); "></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form action="{{ $loginRoute }}" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						{{ $title }}
					</span>
                        @csrf

                    @if ($errors->has('email'))
                        <div class="pb-5 text-danger">{{ $errors->first('email') }}</div>
                    @endif

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Email addess..." value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        @if($title != "Admin Login")
                            <a href="{{route('register')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                Register now
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
