{!!$admin["form"]!!} <ul>
    @foreach($get_routes as $route) 
    @if($route->for=="User")
        <li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                {{$route->name}}
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">{{$route->name}}</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="{{$route->name}}" type="hidden" value="inActive" required>
                        <input type="checkbox" name="{{$route->name}}" 
                        value="Active"  
                        <?php $table = $route->name; ?>  
                        <?php if($get->$table =='Active') echo 'checked="checked"';?> 
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>
    @endif
    @endforeach 
</ul> {!!$admin["eform"]!!}