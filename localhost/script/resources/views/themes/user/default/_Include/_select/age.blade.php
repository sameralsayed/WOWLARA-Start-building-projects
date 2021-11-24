<label>{{ __('AA.Age')}} : @if(!Auth::guest()){{ Auth::user()->age }}@endif</label>
<select class="custom-select2 form-control" name="age" style="width: 100%; height: 38px;">
    @foreach($generals as $get)
        @if($get->group=="ages")
            @if($get->status=="Active")
                @if( Config::get('app.locale')==$get->local)
                    <option value="{{$get->user_age}}">{{$get->user_age}}</option>
                @endif
            @endif
        @endif
    @endforeach
</select>