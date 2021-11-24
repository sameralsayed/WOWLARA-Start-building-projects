<h6>{!!$admin["notio"]!!} {{__('AA.If you want to disable it, leave it blank')}}</h6><hr>
@if (env('APP_ENV')=="local")
    <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->terms_of_service<?php echo "}}";?></pre> 
@endif
<textarea type="text" style="height:800px" class="form-control" name="terms_of_service" >{{$lang->terms_of_service}}</textarea>