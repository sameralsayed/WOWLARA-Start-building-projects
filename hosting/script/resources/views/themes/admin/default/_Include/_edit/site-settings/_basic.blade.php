{!!$select_reload_page!!}
<pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->reload_page<?php echo "}}";?></pre> 

{!!$admin["form"]!!}
    @foreach($form_site as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif
                {!!$admin["site"]["$name"]!!}{{$lang->$name}}{!!$end!!}
        {!!$admin["close"]!!}  
    @endforeach 
{!!$admin["eform"]!!}