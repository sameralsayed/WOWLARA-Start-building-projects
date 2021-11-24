{!!$select_lang!!}

{!!$admin["form"]!!}
    @foreach($form_ads as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["ads"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 