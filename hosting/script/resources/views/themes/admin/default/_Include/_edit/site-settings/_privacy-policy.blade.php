<h6>{!!$admin["notio"]!!} {{__('AA.If you want to disable it, leave it blank')}}</h6><hr>
@if (env('APP_ENV')=="local")
    <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->privacy_policy<?php echo "}}";?></pre> 
@endif
<textarea type="text" style="height:800px" class="form-control" name="privacy_policy" >{{$lang->privacy_policy}}</textarea>