  <div class="header">
    <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">

    @if(str_contains(url()->current(), '/user/profile'))
      <div class="dashboard-setting user-notification" style="padding: 10px 5px 10px 0;">
        <div class="dropdown">

            @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor" || Auth::user()->role=="Writer" || Auth::user()->role=="Author")

              <a class="btn btn-outline-primary btn-lg btn-block" href="{{(env('APP_URL'))}}/admin/panel">{{ __('AA.Admin')}}</a>

            @else

              <a class="btn btn-outline-primary btn-lg btn-block" href="{{(env('APP_URL'))}}/home/@Include('plus.local')">{{ __('AA.Home')}}</a>

            @endif
            
        </div> 
      </div>
    @else

      <div class="dashboard-setting user-notification b-up">
        <div class="dropdown">
          <a class="dropdown-toggle no-arrow" href="#" href="javascript:;" data-toggle="modal" data-target="#language">
            <i class="icon-copy fa fa-language" aria-hidden="true"></i>
          </a>
        </div>
      </div>

      <div class="user-info-dropdown">
        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
            <span class="user-icon">
              <img class="icon-us" @if(!Auth::guest()) src="{{(env('APP_URL'))}}/site/user/{{ Auth::user()->photo }} @else src="{{(env('APP_URL'))}}/themes/default/images/no-img.png @endif" alt="">
            </span>
            <span class="user-name"> @if(!Auth::guest()) {{ Auth::user()->username }} @else {{ __('AA.Welcome') }} @endif</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
            @if(!Auth::guest())
            @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor" || Auth::user()->role=="Writer" || Auth::user()->role=="Author")
            <!-------------------------------admin-->  
            <a class="dropdown-item" href="{{(env('APP_URL'))}}/admin/panel"><i class="dw dw-home"></i>{{ __('AA.Admin Panel') }}</a>
            @endif
            <!-------------------------------Profile-->  
            <a class="dropdown-item" href="{{(env('APP_URL'))}}/user/profile"><i class="dw dw-user1"></i>{{ __('AA.Profile') }}</a>
            @endif

            @if(!Auth::guest())         
            <form method="POST" action="{{ route('logout') }}">
              @csrf
            <!-------------------------------Log Out-->
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();"><i class="dw dw-logout"></i>{{ __('AA.Log Out') }}</a></form>
            @else
            <!-------------------------------Login-->  
            <a class="dropdown-item" data-toggle="modal" data-target="#loginpop" href="#"><i class="icon-copy dw dw-user3"></i>{{ __('AA.Login') }}</a>
            @endif  
            <p class="support">{{ __('AA.support') }}</p>
            <!-------------------------------contact-->    
            <a class="dropdown-item" data-toggle="modal" data-target="#contact-modal" href="#"><i class="icon-copy dw dw-email1"></i>{{ __('AA.contact') }}</a>
            <!-------------------------------feedback-->
            <a class="dropdown-item" data-toggle="modal" data-target="#feedback-modal" href="#"><i class="icon-copy dw dw-question-1"></i>{{ __('AA.feedback') }}</a> 
            <!-------------------------------help-->
            <a class="dropdown-item" href="{{(env('APP_URL'))}}/help/@Include('plus.local')"><i class="icon-copy dw dw-question"></i>{{ __('AA.help') }}</a>     
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>

<div class="" >
  <div class="left-side-bar back-sm back-md back-lg back-xl">
    <div class="brand-logo">
      <a href="{{(env('APP_URL'))}}/home/@Include('plus.local')">
        <img src="{{(env('APP_URL'))}}/site/{{$get->site_logo}}" alt="" class="dark-logo">
        <img src="{{(env('APP_URL'))}}/site/{{$get->site_logo}}" alt="" class="light-logo">
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll h-lg h-xl">
      <div class="sidebar-menu">
        <ul id="accordion-menu">
          
          <li class="dropdown">
           <!-- dropdown -->
          </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-menu-overlay"><i class="icon-copy fa fa-address-book-o" aria-hidden="true"></i></div>
</div>