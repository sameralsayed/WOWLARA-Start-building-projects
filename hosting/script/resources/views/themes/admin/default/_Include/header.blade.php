<div class="header">
    <div class="header-left">
      <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">

    @if(str_contains(url()->current(), '/user/profile'))
      <div class="dashboard-setting user-notification" style="padding: 10px 5px 10px 0;">
        <div class="dropdown">
              <a class="btn btn-outline-primary btn-lg btn-block" href="{{(env('APP_URL'))}}/home/@Include('plus.local')">{{ __('AA.Home')}}</a>
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
            <a class="dropdown-item" href="{{(env('APP_URL'))}}/user/profile"><i class="dw dw-settings2"></i>{{ __('AA.Profile') }}</a>
            @endif

            @if(!Auth::guest())         
            <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();"><i class="dw dw-logout"></i>{{ __('AA.Log Out') }}</a></form>
            @else

            <a class="dropdown-item" data-toggle="modal" data-target="#loginpop" href="#"><i class="icon-copy dw dw-user3"></i>{{ __('AA.Login') }}</a>
            @endif   
          </div>

        </div>
      </div>

      @endif
    </div>
  </div>
</div>
@Include('themes.admin.default._Include.sidebar')

<div class="modal left fade" style="display: none;" id="language" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ __('AA.Language') }}</h4>
      </div>
      <div class="modal-body texc">

        <div class="row modal-500">
          @foreach($langs as $lang)
            <div class="col-md-12 col-lg-12 col-sm-12">
               <a href="{{ route('change_lang', ['lang' => ''.$lang->language.'']) }}">
                 @csrf
                <input type="hidden" value="{{$lang->language}}" name="local" required>
                <button style="width: 100%;margin-bottom: 10px;" class="btn btn-outline-dark @if(!Auth::guest()) @if($lang->language==Auth::user()->local) lang-act @else lang-select @endif @endif" type="submit">
                {{$lang->name}} 
                </button>
              </a>
            </div>
          @endforeach
        </div>
        
      </div>
    </div>
  </div>
</div>