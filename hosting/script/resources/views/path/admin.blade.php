@foreach($get_routes as $route)
        @if(str_contains(url()->current(), '/admin/'.$route->name.''))
            @foreach($langs as $get)
               @if($get->status=="Active")
                    @if( Config::get('app.locale')==$get->language)
                        @Include('themes.admin.'.$get->theme_admin.'.'.$route->path.'')
                    @endif
               @endif
            @endforeach 
        @endif
@endforeach 