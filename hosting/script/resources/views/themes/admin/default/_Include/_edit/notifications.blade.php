@foreach($inc_noti as $name=>$icon)
  <div  class="faq-wrap"><div id="accordion"><div class="card">
     <div class="card-header">
          <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#{{$name}}">
              {{__('AA.'.$name.'')}} <i class="icon-copy fa fa-{{$icon}}" aria-hidden="true"></i>
          </a>
     </div>
     <div id="{{$name}}" class="collapse" data-parent="#accordion">
          @Include('themes.admin.default._Include._edit.site-settings._'.$name.'')
    </div>
  </div>
@endforeach 

{!!$admin["noti_user"]!!} 
          <?php if($get->noti_user =='Active') echo 'checked="checked"';?> 
          class="switch-btn" data-color="#13e643" data-secondary-color="red">
{!!$admin["noti_userclose"]!!}

{!!$admin["noti_guest"]!!} 
          <?php if($get->noti_guest =='Active') echo 'checked="checked"';?> 
          class="switch-btn" data-color="#13e643" data-secondary-color="red">
{!!$admin["noti_guestclose"]!!}

{!!$admin["form"]!!}
    @foreach($form_noti as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["noti"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 