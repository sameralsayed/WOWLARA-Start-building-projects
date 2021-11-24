<div class="page-header">
    <div class="row">
    
        <div class="col-md-7 col-sm-12">
            <div class="title">
              @foreach($get_routes as $route)
                @if($route->for=="Admin")
                @if(str_contains(url()->current(), '/admin/'.$route->name.''))
                  <h3>{{ __('AA.'.$route->name.'')}}</h3>
                @endif
                @endif
              @endforeach

              @foreach($get_routes as $route)
                @if($route->for=="User")
                  @if(str_contains(url()->current(), '/admin/'.$route->name.''))
                    <h3>{{$route->name}}</h3>
                  @endif
                @endif
              @endforeach

            </div>
        </div>
    @if(Auth::user()->role=="Admin" || Auth::user()->role=="Writer" || Auth::user()->role=="Author")
        @foreach($add_admin as $names=>$name)
          @if(str_contains(url()->current(), '/admin/'.$names.''))
            <div class="col-md-5 col-sm-12 text-right" id="accordion">
                <div class="dropdown">
               
                  @if (env('APP_ENV')=="local")
                  @Include('themes.admin.default.doc-windos')
                    <a class="btn btn-primary b-up b-3d" style="margin-right:10px" href="#docum" role="button" data-toggle="modal" data-target="#docum"><i class="icon-copy dw dw-information"></i> {{ __('AA.documentation')}}</a>
                  @endif

                    <a class="btn btn-success b-up b-3d" href="#" role="button" data-toggle="modal" data-target="#general-add"><i data-toggle="tooltip" title="{{ __('AA.New')}} {{ __('AA.'.$name.'')}}" class="icon-copy dw dw-add"></i> 
                  {{ __('AA.New')}} {{ __('AA.'.$name.'')}}
                    </a>

                  <!-- @if(str_contains(url()->current(), '/admin/categorys'))  
                      @if(count($get_categorys)>0) @else {!!$entrdata_catg!!} @endif
                  @endif   
                  @if(str_contains(url()->current(), '/admin/sub_categorys'))  
                      @if(count($get_sub_categorys)>0) @else {!!$entrdata_sub_catg!!} @endif
                  @endif !-->

                </div>
            </div>
          @endif
        @endforeach 
      
        @foreach($get_routes as $route)
          @if($route->for=="User")
            @if(str_contains(url()->current(), '/admin/'.$route->name.''))
              @if (env('APP_ENV')=="local")
                <a class="btn btn-primary b-up b-3d" style="margin-right:10px" href="#documentation" role="button" data-toggle="modal" data-target="#documentation"><i class="icon-copy dw dw-information"></i> {{ __('AA.documentation')}}</a>

                <a class="btn btn-danger b-up b-3d" style="margin-right:10px" href="#" role="button" data-toggle="modal" data-target="#CRUD-add"><i class="icon-copy dw dw-analytics-17"></i> {{ __('AA.CRUD')}}</a>

                <a class="btn btn-warning b-up b-3d" style="margin-right:10px" href="#" role="button" data-toggle="modal" data-target="#Codes"><i class="icon-copy dw dw-coding"></i> {{ __('AA.Codes')}}</a>  
              @endif
                <a class="btn btn-success b-up b-3d" href="#" role="button" data-toggle="modal" data-target="#addnew"><i class="icon-copy dw dw-logout-1"></i> {{ __('AA.Add')}}</a>

                @Include('themes.admin.default._Include._crud')
            @endif
          @endif
        @endforeach
    @endif

    </div>
</div>

@if(Auth::user()->role=="Admin")
@if(str_contains(url()->current(), '/admin/site-settings'))
  <div class="card" style="padding:30px">
    <h5>{{ __('AA.Modify it only once It will be applied to all languages')}}</h5><hr>
    <form role="form" method="post" action="/admin/url/full">
      @csrf
                  
      <div class="row">
      @foreach($site_full as $name=>$title)
        <div class="col-md-3 col-sm-12">
          <div class="form-group">
            <label><h6>{{ __('AA.'.$title.'')}}</h6></label>
            <input class="form-control" value="{{(env(''.$name.''))}}" name="{{$name}}" type="text">
          </div>
        </div>
      @endforeach
      </div>

    <div class="col-md-12 col-sm-12">
        <button style="width:100%" type="submit" class="btn btn-primary b-up b-3d">{{ __('AA.Update')}}</button></form>
    </div>
  </div>
  <br>
@endif
@endif