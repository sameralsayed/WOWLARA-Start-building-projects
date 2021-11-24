@foreach($langs as $get)
    @if($get->status=="Active")
        @if( Config::get('app.locale')==$get->language)
            @Include('themes.user.'.$get->theme_user.'.auth.forgot-password')
        @endif  
    @endif 
@endforeach