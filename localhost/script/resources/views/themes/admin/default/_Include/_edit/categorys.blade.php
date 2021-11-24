{!!$select_lang!!}
{!!$select_features!!}

{!!$admin["adult"]!!} 
          <?php if($get->adult =='Yes') echo 'checked="checked"';?> 
          class="switch-btn" data-color="#13e643" data-secondary-color="red">
{!!$admin["adultclose"]!!} 

{!!$admin["form"]!!}
    @foreach($form_category as $name=>$end) 
        {!!$admin["open"]!!} {{__('AA.'.$name.'')}}
            {!!$admin["and"]!!}
                {!!$admin["category"]["$name"]!!}{{$get->$name}}{!!$end!!}
        {!!$admin["close"]!!}    
    @endforeach 
{!!$admin["eform"]!!} 