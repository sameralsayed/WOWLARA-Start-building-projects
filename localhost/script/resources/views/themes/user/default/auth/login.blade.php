@extends('themes.user.default.layouts.app')
@section('title', $get->login_title)
@section('description', $get->login_description)
@section('keywords', $get->login_keywords)
@section('content')
@Include('themes.user.default._Include.windows.social-login')
@if ($get->can_login=="Active")
<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{(env('APP_URL'))}}/site/{{$get->login_image}}" alt="{{$get->site_name}}">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('AA.Login To')}} {{$get->site_name}}</h2>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group custom">
                                <input type="email" for="email" id="email" name="email" class="form-control form-control-lg" placeholder="{{ __('AA.Email')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" id="remember_me" name="remember" for="customCheck1">{{ __('AA.Remember')}}</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password"><a href="{{ route('password.request') }}">{{ __('AA.Forgot Password')}}</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ __('AA.Sign In')}}">
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">{{ __('AA.OR')}}</div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('register') }}">{{ __('AA.Register To Create Account')}}</a>
                                    </a>
                                    </div>
                                    <div style="margin-top:15px" class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#s-login">{{ __('AA.Login with Social')}}</a>                                        
                                    </div>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@else
{{ __('AA.Sorry, this is a special service')}}
@endif
@endsection