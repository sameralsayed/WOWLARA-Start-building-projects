<div style="text-align:center;margin-bottom:20px"><i class="icon-copy fa fa-user-circle-o icon-150" aria-hidden="true"></i>
</div>
<form method="POST" action="{{ route('login') }}">
   @csrf
   <!-------------------------------Email-->
   <div class="input-group custom">
       <input type="email" for="email" id="email" name="email" class="form-control form-control-lg" placeholder="{{ __('AA.Email')}}">
       <div class="input-group-append custom">
           <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
       </div>
   </div>
   <!-------------------------------password-->
   <div class="input-group custom">
       <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="**********">
       <div class="input-group-append custom">
           <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
       </div>
   </div>
   <div class="row pb-30">
      <!-------------------------------Remember-->
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
           <!-------------------------------Login-->
           <div class="input-group mb-0">
               <input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ __('AA.Sign In')}}">
           </div>
           <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">{{ __('AA.OR')}}</div>
           <!-------------------------------Register-->
           <div class="input-group mb-0">
               <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('register') }}">{{ __('AA.Register To Create Account')}}</a>
           </div>
       </div>
   </div>
</form>