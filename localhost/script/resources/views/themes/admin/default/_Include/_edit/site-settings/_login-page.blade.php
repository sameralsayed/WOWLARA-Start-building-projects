<h6>{!!$admin["notio"]!!} {{__('AA.This data is only for the login page')}}</h6><hr>
{!!$admin["form"]!!}
    @foreach($form_login as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif
                {!!$admin["login_page"]["$name"]!!}{{$lang->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}