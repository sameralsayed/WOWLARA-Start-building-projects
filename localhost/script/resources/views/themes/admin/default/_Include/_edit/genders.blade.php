{!!$admin["form"]!!}
    {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
        {!!$admin["and"]!!}
        {!!$select_lang!!}
        <input type="text" placeholder="'.__('AA.male or female').'" '.$tooltip.'"'.__('AA.male or female').'" class="form-control"  name="user_gender" value="{{$get->user_gender}}" >
    {!!$admin["close"]!!}    
{!!$admin["eform"]!!} 