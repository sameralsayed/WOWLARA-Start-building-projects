<div class="modal fade" id="{{ str_replace(' ', '-', $noti->noti_cookies_name) }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background:{{$noti->noti_background_color}};color:{{$noti->noti_color}}">
            <button style="text-align:right;padding:20px" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body">
                <div class="card card-box text-center">
                    <div class="card-body" style="background:{{$noti->noti_background_color}};color:{{$noti->noti_color}}">
                    <div style="font-size:100px;">
                        {!!$noti->noti_icon!!}
                    </div>
                        <h5 class="card-title" style="color:{{$noti->noti_color}}">{{$noti->noti_title}}</h5>
                        <p class="card-text">{{$noti->noti_message}}</p>
                        @if($noti->noti_link)
                        <a href="{{$noti->noti_link}}" target="_blank" style="width: 100% !important;
    margin-top: 5px !important;
    color: #fff !important;
}" class="btn btn-primary">{{ __('AA.View')}}</a>
                        @endif  
                    </div>
                </div>
            </div>
        </div>
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