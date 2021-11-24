@foreach($langs as $get)
    @if($get->status=="Active")
        @if( Config::get('app.locale')==$get->language)
            @Include('themes.user.'.$get->theme_user.'.profile.update-profile-information-form')
        @endif  
    @endif 
@endforeach