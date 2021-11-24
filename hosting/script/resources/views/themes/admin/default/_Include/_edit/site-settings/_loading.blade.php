<h6>{!!$admin["notio"]!!} {{__('AA.This will display when data is reloaded')}}</h6><hr>
<div class="col-md-12 col-lg-12">
    <div class="form-group">
        <input class="form-control" value="{{$lang->load_style}}" name="load_style" type="color">
    </div>
</div> 

<div class="select-role">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    @foreach($sys_load as $name) 
        <label style="margin-top: 20px;height: 100px;" class="btn">
            <input type="radio" name="loading" value="{{$name}}" <?php if($lang->loading ===$name) echo 'checked';?> >
    		{!!$Touser[$name]!!}
               @if (env('APP_ENV')=="local")
                <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
               @endif
        </label>
    @endforeach 
    </div>
</div>