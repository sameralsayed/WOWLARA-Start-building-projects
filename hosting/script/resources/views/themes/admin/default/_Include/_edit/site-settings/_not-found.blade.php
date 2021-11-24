<h6>{!!$admin["notio"]!!} {{__('AA.found_info')}}</h6><hr>
{!!$admin["form"]!!}
    @foreach($form_notfound as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif
            {!!$admin["notfound"]["$name"]!!}{{$lang->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 