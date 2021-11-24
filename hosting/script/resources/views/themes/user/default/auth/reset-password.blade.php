@extends('themes.user.default.layouts.app')
@section('title', $titles)
@section('content')
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/site/forgot-password.png" alt="">
                </div>
                <div class="col-md-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('AA.Reset Password')}}</h2>
                        </div>
                        <h6 class="mb-20">{{ __('AA.Enter your new password, confirm and submit')}}</h6>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="input-group custom">
                                <input id="email" name="email" :value="old('email', $request->email)" required autofocus type="email" class="form-control form-control-lg" placeholder="{{ __('AA.Email')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input id="password" name="password" type="password" class="form-control form-control-lg" required autocomplete="new-password" placeholder="{{ __('AA.Password')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control form-control-lg" required autocomplete="new-password" placeholder="{{ __('AA.Password Confirmation')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ __('AA.Reset Password')}}">
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