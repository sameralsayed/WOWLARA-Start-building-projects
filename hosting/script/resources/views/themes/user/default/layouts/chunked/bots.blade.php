    @if(Browser::isBot())
        @if( Config::get('app.locale')==$get->language)
            @if($get->Bot=="Active")
                @if(str_contains(url()->current(), '/user/profile'))
                    @Include('themes.user.default.layouts.user-template')
                @else
                    @Include('themes.user.default.layouts.app-template')
                @endif
            @else
              <h1>blok</h1>
            @endif
        @endif
    @endif
