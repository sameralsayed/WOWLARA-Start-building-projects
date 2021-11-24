{!!$select_lang!!}
{!!$admin["form"]!!}
    @foreach($form_faq as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["faq"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}