@if(Auth::user()->role=="Admin")
<div class="modal left fade" style="display: none;" id="geo-{{$get->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        @foreach($database_geo as $name=>$title)
            <li>{{ __('AA.'.$title.'')}} -> [ {{$get->$name}} ]</li><hr>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif