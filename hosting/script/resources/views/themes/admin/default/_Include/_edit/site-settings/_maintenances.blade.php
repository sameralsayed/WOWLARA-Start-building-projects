<h6>{!!$admin["notio"]!!} {{__('AA.If you wish to disable this, leave [ Title ] field blank')}}</h6><hr>
{!!$admin["form"]!!}
    @foreach($form_maintenances as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif      
            {!!$admin["maintenances"]["$name"]!!}{{$lang->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}