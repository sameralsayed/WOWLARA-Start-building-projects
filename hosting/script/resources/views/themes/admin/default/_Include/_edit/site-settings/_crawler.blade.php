<h6>{!!$admin["notio"]!!} {{__('AA.search engines and robots')}}</h6><hr>
{!!$admin["form"]!!} <ul>
    @foreach($crawlers as $name=>$title) 
        <li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                {{__('AA.'.$name.'')}}
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">{{__('AA.'.$title.'')}}</h5>
                      @if (env('APP_ENV')=="local")
                       <pre class="coder"><?php echo "{{\$";?><?php echo "get";?>->{{$name}}<?php echo "}}";?> = "Active" or "inActive"</pre> 
                      @endif               
                    </div>
                    <div class="col-md-3">
                     <input name="{{$name}}" type="hidden" value="inActive" required>
                        <input type="checkbox" name="{{$name}}" 
                        value="Active"  
                        <?php if($lang->$name =='Active') echo 'checked="checked"';?> 
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>
    @endforeach 
</ul> {!!$admin["eform"]!!}