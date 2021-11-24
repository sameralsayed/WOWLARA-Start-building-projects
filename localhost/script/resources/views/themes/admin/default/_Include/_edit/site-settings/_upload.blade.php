<h6>{!!$admin["notio"]!!} {{__('AA.Upload System Settings')}}</h6><hr>
{!!$admin["form"]!!} <ul>
    @foreach($toUpload as $name=>$title) 
        <li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                {{__('AA.'.$name.'')}}
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-7">
                      <h5 class="mb-10 h4">{{__('AA.'.$title.'')}}</h5>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control" value="{{$lang->$name}}" name="{{$name}}" type="number">
                        </div>
                     </div> 
                </div>
            </div>
        </li>
    @endforeach 

    @foreach($toUploadselect as $name=>$title) 
        <li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                {{__('AA.'.$name.'')}}
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9"> 
                      <h5 class="mb-10 h4">{{__('AA.'.$title.'')}}</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="{{$name}}" type="hidden" value="false" required>
                        <input type="checkbox" name="{{$name}}" 
                        value="true"  
                        <?php if($lang->$name =='true') echo 'checked="checked"';?> 
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>
    @endforeach 


</ul> {!!$admin["eform"]!!}
