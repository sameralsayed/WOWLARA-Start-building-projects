<div class="dropdown b-zoom">
  <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
    <i class="dw dw-more"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
    @if(str_contains(url()->current(), '/admin/routes'))
    @else
    @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor" || Auth::user()->role=="Author")
      @if(str_contains(url()->current(), '/admin/languages'))
        <a class="dropdown-item b-zoom" data-color="#265ed7" data-toggle="modal" data-target="#edit{{$lang->id}}" href="#"><i class="dw dw-edit2"></i>{{ __('AA.Edit')}}</a>
      @else
        <a class="dropdown-item b-zoom" data-color="#265ed7" data-toggle="modal" data-target="#edit{{$get->id}}" href="#"><i class="dw dw-edit2"></i>{{ __('AA.Edit')}}</a>
      @endif
    @endif
    @endif
    
    @if(str_contains(url()->current(), '/admin/users'))
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/change/status/user/{{$get->id}}" enctype="multipart/form-data">
      @elseif(str_contains(url()->current(), '/admin/languages'))
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/change/status/lang/{{$lang->id}}" enctype="multipart/form-data">

      @elseif(str_contains(url()->current(), '/admin/categorys'))
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/change/status/categorys/{{$lang->id}}" enctype="multipart/form-data">

      @elseif(str_contains(url()->current(), '/admin/sub_categorys'))
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/change/status/sub/categorys/{{$lang->id}}" enctype="multipart/form-data">

        @else
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/change/status/GEL/{{$get->id}}" enctype="multipart/form-data">
    @endif 

    @csrf

  @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor" || Auth::user()->role=="Author")
    @if($get->status=="InActive")
        <input type="hidden" value="Active" name="status" required>
        <button class="dropdown-item b-zoom" data-color="#000" href="#"><i class="icon-copy dw dw-refresh1"></i>{{ __('AA.Active')}}</button>
    @endif

    @if($get->status=="Active")
    <input type="hidden" value="InActive" name="status" required>
    <button class="dropdown-item b-zoom" data-color="#000" href="#" type="submit"><i class="icon-copy dw dw-refresh1"></i>{{ __('AA.InActive')}}</button>
    @endif
  @endif

   </form>
    @if(Auth::user()->role=="Admin")
    <a class="dropdown-item b-zoom" data-toggle="modal" data-target="#delete{{$get->id}}" data-color="#e95959" href="#"><i class="dw dw-delete-3"></i>{{ __('AA.Delete')}}</a>
    @endif
  </div>
</div>