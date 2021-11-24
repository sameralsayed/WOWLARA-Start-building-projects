@foreach($pages_routes as $route)
        @if(str_contains(url()->current(), '/'.$route->path.''))
            @foreach($langs as $get)
               @if($get->status=="Active")
                    @if( Config::get('app.locale')==$get->language)
                        @Include('themes.user.'.$get->theme_user.'.'.$route->path.'')
                    @endif
               @endif
            @endforeach 
        @endif
@endforeach 