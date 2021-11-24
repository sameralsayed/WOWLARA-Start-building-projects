@extends('themes.user.default.layouts.app')
@section('title', $titles)
@section('content')
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/site/forgot-password.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('AA.Forgot Password')}}</h2>
                        </div>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h6 class="mb-20">{{ __('AA.Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')}}</h6>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                            <div class="input-group custom">
                                <input id="email" name="email" :value="old('email')" type="email" class="form-control form-control-lg" placeholder="{{ __('AA.Email')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ __('AA.Submit')}}">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="font-16 weight-600 text-center" data-color="#707373">{{ __('AA.OR')}}</div>
                                </div>
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="/login">{{ __('AA.Login')}}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection