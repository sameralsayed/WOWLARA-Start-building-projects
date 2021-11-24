<h6>{!!$admin["notio"]!!} {{__('AA.When modifying the icon, you must click on the update button according to the chosen language')}}</h6>
<hr>
Path <pre class="coder"><?php echo "{{(env('";?><?php echo "APP_URL";?><?php echo "'))}}";?>/icons-svg/icon-name</pre>
<div class="row">
 
@foreach($get_svgs as $svg)
@if($svg->local==$lang->language)
<?php $name = $svg->name;?>
<div  class="col-md-3 col-lg-3 col-sm-12">
@if (env('APP_ENV')=="local")
    <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?></pre> 
@endif	
  <h6>{{$name}}</h6>
    <div class="icons-icon-upload">
    <div class="icons-icon-edit">
        <input name="{{$name}}" type="file" id="{{$name}}Upload" accept=".png, .jpg, .jpeg .svg" />
        <label for="{{$name}}Upload"></leble>
    </div>
  <div class="icons-icon-preview">
      <div id="{{$name}}Preview" style="background-image: url({{(env('APP_URL'))}}/icons-svg/{{$lang->$name}});"></div></div>
  </div></div>
 @endif
@endforeach
</div>