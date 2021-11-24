<div id="{{ str_replace(' ', '-', $noti->noti_cookies_name) }}" class="collapse" data-toggle="collapse" data-target="#{{ str_replace(' ', '-', $noti->noti_cookies_name) }}" >
{!!$admin["style_noti"]!!} {!!$admin["style_noti_top"]!!}
    <div class="col-lg-12 col-md-12 col-sm-12">
        @if($noti->noti_link)<a href="{{$noti->noti_link}}" target="_blank">@endif
            <div class="alert alert-warning lert-dismissible fade show" style="border-color:{{$noti->noti_background_color}};background:{{$noti->noti_background_color}};color:{{$noti->noti_color}}"    role="alert">
                <strong  style="color:{{$noti->noti_color}}"> {!!$noti->noti_icon!!} {{$noti->noti_title}}</strong> {{$noti->noti_message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span style="color:{{$noti->noti_color}}" aria-hidden="true">&times;</span>
                </button>
            </div>
        @if($noti->noti_link)</a>@endif
    </div>
</div>

@if(!Auth::guest())
    @if($noti->noti_user=="Active")
    <script type="text/javascript">
    $(document).ready(function(){
            setTimeout(function(){
            if(!Cookies.get('{{$noti->noti_cookies_name}}')) {
              $("#{{ str_replace(' ', '-', $noti->noti_cookies_name) }}").modal('show');
              Cookies.set('{{$noti->noti_cookies_name}}', true);
            } 
        },<?php echo $noti->noti_seconds;?>000);
     });
    </script>
    @endif
@else
    @if($noti->noti_guest=="Active")
    <script type="text/javascript">
    $(document).ready(function(){
            setTimeout(function(){
            if(!Cookies.get('{{$noti->noti_cookies_name}}')) {
              $("#{{ str_replace(' ', '-', $noti->noti_cookies_name) }}").modal('show');
              Cookies.set('{{$noti->noti_cookies_name}}', true);
            } 
        },<?php echo $noti->noti_seconds;?>000);
     });
    </script>
    @endif
@endif