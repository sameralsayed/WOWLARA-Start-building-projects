@extends('themes.user.default.layouts.app')
@section('title', $get->register_title)
@section('description', $get->register_description)
@section('keywords', $get->register_keywords)
@section('content')
@if ($get->can_register=="Active")
<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{(env('APP_URL'))}}/site/{{$get->register_image}}" alt="{{$get->site_name}}">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">{{ __('AA.Login To')}} {{$get->site_name}}</h2>
                        </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="hidden" value="user" name="role" required>
                    {!!$UserInfoGeo!!}
                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="input-group custom">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="{{ __('AA.Name')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-name"></i></span>
                                </div>
                            </div>
                        </div>    

                        <div class="col-sm-6">
                            <div class="input-group custom">
                                <input type="text" name="username" class="form-control form-control-lg" placeholder="{{ __('AA.Username')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-user-1"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="{{ __('AA.Password')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                        </div>    

                        <div class="col-sm-12">
                            <div class="input-group custom">
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="{{ __('AA.Password Confirmation')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                        </div>    

                        <div class="col-sm-12">
                            <div class="input-group custom">
                                <input type="text" name="email" class="form-control form-control-lg" placeholder="{{ __('AA.Email')}}">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-email1"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            {!!$select_lang!!}
                        </div>   
                        
                        <div class="col-sm-12 col-md-6">
                          <div class="input-group custom">
                            @Include('themes.user.default._Include._select.gender')
                          </div>
                        </div>    

                        <div class="col-sm-12 col-md-6">
                            <div class="input-group custom">  
                            @Include('themes.user.default._Include._select.age')
                            </div>
                        </div> 
 
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ __('AA.Register')}}">
                            </div></form>

                            <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">{{ __('AA.OR')}}</div>
                            <div class="input-group mb-0">
                                <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('login') }}">{{ __('AA.Already registered?')}}</a>
                            </div>

                        </div>
                    </div>
                        
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
