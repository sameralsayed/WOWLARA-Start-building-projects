    <div class="left-side-bar">
        
        <div class="brand-logo">
            <a href="{{(env('APP_URL'))}}/home/@Include('plus.local')">
              @foreach($langs as $lang)
                @if( Config::get('app.locale')==$lang->language)   
                <img src="{{(env('APP_URL'))}}/site/{{$lang->site_logo}}" alt="{{$lang->site_name}}" class="dark-logo">
                <img src="{{(env('APP_URL'))}}/site/{{$lang->site_logo}}" alt="{{$lang->site_name}}" class="light-logo">
                @endif
              @endforeach
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>

        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <a href="{{(env('APP_URL'))}}/admin/panel" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-home"></span>
                        <span class="mtext">{{ __('AA.Panel') }}</span>
                    </a>

                    @foreach($get_routes as $route)
                        @if($route->for=="User")
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                    {!!$route->icon!!}<span class="mtext"> {{$route->name}}</span>
                            </a>     
                            <ul class="submenu">
                                <li><a href="{{(env('APP_URL'))}}/admin/{{$route->name}}">{{ __('AA.Manage') }}</a></li>
                            </ul>
                        </li>
                        @endif
                    @endforeach

                    <li>
                        <div style="color:#000" class="sidebar-small-cap">{{ __('AA.Settings') }}</div>
                    </li>
                @foreach($get_routes as $route)
                    @if($route->for=="Admin")
                    <li class="dropdown b-zoom">
                        <a href="javascript:;" class="dropdown-toggle">
                            {!!$route->icon!!}<span class="mtext">{{ __('AA.'.$route->name.'') }}</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{(env('APP_URL'))}}/admin/{{$route->name}}">{{ __('AA.Manage') }}</a></li>
                        </ul>
                    </li> 
                    @endif
                @endforeach

                </ul>
            </div>
        </div>
    </div>