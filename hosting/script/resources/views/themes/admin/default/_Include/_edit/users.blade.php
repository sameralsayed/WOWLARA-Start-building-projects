{!!$select_lang!!}

@if(Auth::user()->role=="Admin")
    {!!$for_select_role!!}
<h5>{{__('AA.The basic settings for the site, and the delete button is only displayed admin')}}</h5>
<hr>
@foreach($select_role_info as $name=>$title) 
<li>{{$name}} = {{__('AA.'.$title.'')}}</li>
@endforeach
<hr>
@endif

{!!$admin["form"]!!}
    @foreach($form_user as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["user"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 