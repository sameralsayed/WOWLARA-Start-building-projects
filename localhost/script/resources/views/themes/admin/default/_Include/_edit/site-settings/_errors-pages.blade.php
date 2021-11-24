{!!$admin["form"]!!}
    @foreach($up_errors_pages as $name=>$title) 
        {!!$admin["open"]!!} {{__('AA.'.$title.'')}}
            {!!$admin["and"]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif
            <textarea type="text" style="height:140px;" class="form-control" name="{{$name}}" style="height:640px;" >{{$get->$name}}</textarea>
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!}