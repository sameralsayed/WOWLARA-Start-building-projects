<label>{{ __('AA.Gender')}} : @if(!Auth::guest()){{ Auth::user()->gender }}@endif</label>
<select class="custom-select2 form-control" name="gender" style="width: 100%; height: 38px;">
   @foreach($generals as $get)
        @if($get->group=="genders")
            @if($get->status=="Active")
                @if( Config::get('app.locale')==$get->local)
                    <option value="{{$get->user_gender}}">{{$get->user_gender}}</option>
                @endif
            @endif
        @endif
    @endforeach
</select>