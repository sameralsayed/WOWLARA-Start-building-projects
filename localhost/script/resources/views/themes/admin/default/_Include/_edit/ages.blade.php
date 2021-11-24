{!!$admin["form"]!!}
    {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
        {!!$admin["and"]!!}
        {!!$select_lang!!}
        <input type="number" placeholder="'.__('AA.Like 18 or something else').'" '.$tooltip.'"'.__('AA.Like 18 or something else').'" class="form-control" value="{{$get->user_age}}" name="user_age" >
    {!!$admin["close"]!!}    
{!!$admin["eform"]!!} 