<h6>{!!$admin["notio"]!!} {{__('AA.user_blocked')}}</h6><hr>
{!!$admin["form1"]!!}
        {{__('AA.'.$name.'')}}
{!!$admin["next1"]!!}
    <div class="col-md-12 mb-10 h6"> 
    </div>
    <div class="col-md-12">
        {!!$admin["blocked"]["blocked_user"]!!}{{$lang->blocked_user}}{!!$admin["endt"]!!}
            @if (env('APP_ENV')=="local")
             <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->blocked_user<?php echo "}}";?></pre> 
            @endif
    </div>
{!!$admin["close1"]!!}