<div class="modal fade bs-example-modal-lg" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">{{ __('AA.New') }}</h4>    
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

          <div class="modal-body">
            @foreach($get_routes as $route)
              @if($route->for=="User")
                @if(str_contains(url()->current(), '/admin/'.$route->name.''))
                <form role="form" method="post" action="{{ route(''.$route->name.'-add') }}" enctype="multipart/form-data">
                @endif
              @endif
            @endforeach
               
              @csrf

            {!!$select_lang!!}
            <!--{!!$user_id_support!!}-->
            @foreach($cruds as $get)
              @if($get->route==$rout)
	            <div class="form-group">
		            <label>{{$get->name}}</label>
                  @if($get->file=="Yes")
                  <div class="image-upload">
                    <div class="image-edit">
                      <input name="{{$get->name}}" type="file" id="{{$get->name}}Upload" accept=".png, .jpg, .jpeg" />
                      <label for="{{$get->name}}Upload"></leble>
                    </div>
                    <div class="image-preview">
                    <div id="{{$get->name}}Preview" style="background-image: url(/uploads/);"></div></div></div>
                @else
                  <input class="form-control" type="text" name="{{$get->name}}">
                @endif
	            </div>
              @endif
            @endforeach
          </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary b-up b-3d">{{ __('AA.Add')}}</button></form>
                <button type="button" class="btn btn-secondary b-up b-3d" data-dismiss="modal">{{ __('AA.Close')}}</button>
            </div>
            
        </div>
    </div>
</div>