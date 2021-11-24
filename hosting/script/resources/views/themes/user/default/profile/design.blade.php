<h6>{!!$Touser["notio"]!!} {{ __('AA.Choose your favorite design')}}</h6><hr><br>
<form method="post" action="{{(env('APP_URL'))}}/update/design/{{ Auth::user()->id }}">
  @csrf
    @if($get->design=='Active')
    <input type="color" name="favorite_design" value="{{Auth::user()->favorite_design}}" style="height:300px;width:100%">
    @else
    <div class="select-role">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
        @foreach($generals as $design)
            @if($design->group=="designs")
                @if($design->status=='Active')
                    @if( Config::get('app.locale')==$design->local)
                    <label style="background:{{$design->design_color}};width: 20%;margin-top: 20px;height: 100px;" class="btn">
                        <input type="radio" name="favorite_design" value="{{$design->design_color}}" >
                         @if($design->design_color==Auth::user()->favorite_design) {{ __('AA.Active')}} @endif
                    </label>
                    @endif
                @endif
            @endif
        @endforeach
        </div>
    </div>
    @endif
  <button style="width:100%" type="submit" class="btn btn-primary b-zoom b-3d">{{ __('AA.Design changed')}}</button>
</form>