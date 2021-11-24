{!!$select_lang!!}

{!!$admin["form"]!!}
    @foreach($form_code as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["code"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}