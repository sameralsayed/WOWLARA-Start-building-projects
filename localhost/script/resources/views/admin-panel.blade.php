@foreach($langs as $get)
   @if($get->status=="Active")
        @if( Config::get('app.locale')==$get->language)
            @Include('themes.admin.'.$get->theme_admin.'.admin-panel')
        @endif
   @endif
@endforeach 