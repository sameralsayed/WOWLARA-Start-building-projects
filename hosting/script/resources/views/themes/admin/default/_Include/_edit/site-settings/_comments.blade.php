<h6>{!!$admin["notio"]!!} {{__('AA.Comment piece will be activated when adding a [ code ]')}}</h6><hr>
{!!$admin["form"]!!}
    @foreach($up_comments as $name=>$title) 
        {!!$admin["open"]!!} {{__('AA.'.$title.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif  
            <textarea type="text" class="form-control" name="{{$name}}" >{{$lang->$name}}</textarea>
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}