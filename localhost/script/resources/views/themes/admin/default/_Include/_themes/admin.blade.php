<div class="row">
@foreach($generals as $get)
    @if($get->local==$lang->language)
      @if($get->group=="themes")
        @if($get->theme_to=="Admin")
            @Include('themes.admin.default._Include._edit')
            @Include('themes.admin.default._Include._delete')
              <div class="col-lg-6 col-md-5 mb-20">
                <div class="card-box height-100-p pd-20">
                  
                  <div class="max-height-300">
                    <img style="height:300px;" src="{{(env('APP_URL'))}}/uploads/themes/{{$get->theme_image}}" alt="">
                  </div>

                  <div class="text-left">
                   <div class="h5 mb-11 mt-15">{{$get->theme_name}}</div>
                   <div class="font-14 weight-500 mx-auto pb-20" data-color="#a6a6a7">
                    {{$get->theme_description}}<br><br>
                    {{__('AA.Auther')}} : {{$get->theme_auther}}<br>
                    {{__('AA.Version')}} : {{$get->theme_version}}<br> 
                    {{__('AA.Created')}} : {{$get->created_at->ago()}}<br>      
                  </div>

                  @if($get->theme_name==$lang->theme_admin)
                  <a href="#" style="width:100%" class="btn btn-success btn-sm mb-10">{{__('AA.Active now')}}</a>
                  @else 
                  <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/activation/theme/{{$lang->id}}">
                    @csrf
                    <input type="hidden" name="theme_admin" value="{{$get->theme_name}}">
                   <button style="width:100%" type="submit" class="btn btn-warning mb-10">{{ __('AA.Activation')}}</button></form>
                  @endif
                  @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor")
                  <a href="#" data-toggle="modal" data-target="#edit{{$get->id}}" class="btn btn-dark btn-sm"><i class="icon-copy dw dw-edit2"></i> {{ __('AA.Edit')}}</a>
                  @endif

                  @if(Auth::user()->role=="Admin")
                  <a href="#" data-toggle="modal" data-target="#delete{{$get->id}}" class="btn btn-danger btn-sm"><i class="icon-copy dw dw-delete-3"></i> {{ __('AA.Delete')}}</a>
                  @endif

                </div>
              </div>
            </div>
        @endif
      @endif
    @endif
@endforeach
</div>