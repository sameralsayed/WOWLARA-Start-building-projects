{!!$select_lang!!}

{!!$admin["form"]!!}
    @foreach($form_help as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["help"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 