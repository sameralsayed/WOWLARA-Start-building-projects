@foreach($systems as $system=>$title) 
@if(Browser::$system())
  @foreach($generals as $noti) 
    @if($noti->local==$get->language)
      @if($noti->group=="notifications")
        @if($noti->status=="Active")
          @if($noti->$system=="Active")
            @foreach($devices as $device=>$title) 
              @if(Browser::$device())
                @if($noti->$device=="Active")
                  @foreach($browsers as $browser=>$title)
                    @if(Browser::$browser())
                      @if($noti->$browser=="Active")
                        @foreach($get_routes as $route)
                          @if($route->for=="User")

                          @if(str_contains(url()->current(), '/'.$route->name.''))
                           <?php $table = $route->name; ?>  
                            @if($noti->$table=="Active")
                              @if($noti->noti_position=="Window")
                                @Include('themes.user.default._Include._notification._Include.top')
                              @endif
                            @endif
                          @endif
                          
                          @endif                     
                        @endforeach
                      @endif
                    @endif
                  @endforeach
                @endif
              @endif
            @endforeach             
          @endif    
        @endif
      @endif          
    @endif
  @endforeach 
@endif 
@endforeach