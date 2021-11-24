{!!$select_lang!!}

{!!$admin["form"]!!}
    @foreach($form_analytic as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["analytic"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}