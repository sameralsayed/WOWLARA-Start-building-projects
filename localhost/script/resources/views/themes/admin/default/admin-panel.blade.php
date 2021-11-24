@extends('themes.admin.default.index') 
@section('content') 
    <div class="row pb-10">
      <!-----------------------------------------users-->
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{ count($table_users) }}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.users')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#fff"><span class="micon dw dw-user-11"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end users-->

      <!-----------------------------------------verifys-->
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{ count($get_verifys) }}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.verification')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#fff"><span class="micon dw dw-name"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end verifys-->

      <!-----------------------------------------languages-->
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{ count($langs) }}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.languages')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon"><span class="micon dw dw-worldwide-1"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end languages-->

      <!-----------------------------------------categorys-->
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{ count($get_categorys) }}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.categorys')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#fff"><span class="micon dw dw-header1"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end categorys-->

      <!-----------------------------------------online users-->
        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{ $onilne_users }}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.Online Users')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#fff"><span class="micon dw dw-satellite"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end online users-->

      <!-----------------------------------------online Guests-->
        <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
          <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
              <div class="widget-data">
                <div class="weight-700 font-24 text-dark">{{$onilne_guests}}</div>
                <div class="font-14 text-secondary weight-500">{{ __('AA.Online Guests')}}</div>
              </div>
              <div class="widget-icon">
                <div class="icon" data-color="#fff"><span class="micon dw dw-satellite"></span></div>
              </div>
            </div>
          </div>
        </div>
      <!-----------------------------------------end online Guests-->

        <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
          <div class="bg-white pd-20 card-box mb-30">
          <h5 class="h4 text-blue">{{ __('AA.active users last 10 minutes')}}</h5>
            <div class="user-list">
              <ul>
              @foreach ($users10->slice(0,5) as $activity)
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="{{(env('APP_URL'))}}/site/user/{{$activity->user->photo}}" class="border-radius-100 box-shadow" width="50" height="50" alt="">
                    </div>
                    <div class="txt">
                      <div class="font-14 weight-600">{{$activity->user->username}}</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">{{$activity->user->ip}} | {{$activity->user->ip}}</div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="{{(env('APP_URL'))}}/user/{{$activity->user->id}}/{{Config::get('app.locale')}}" target="_blank" class="btn btn-sm btn-outline-primary">{{ __('AA.View')}}</a>
                  </div>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
          <div class="bg-white pd-20 card-box mb-30">
          <h6 class="h4 text-blue">{{ __('AA.active users last 1 hour')}}</h6>
            <div class="user-list">
              <ul>
              @foreach ($lastUsers->slice(0,5) as $activity)
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="{{(env('APP_URL'))}}/site/user/{{$activity->user->photo}}" class="border-radius-100 box-shadow" width="50" height="50" alt="">
                    </div>
                    <div class="txt">
                      <div class="font-14 weight-600">{{$activity->user->username}}</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">{{$activity->user->ip}} | {{$activity->user->ip}}</div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="{{(env('APP_URL'))}}/user/{{$activity->user->id}}/{{Config::get('app.locale')}}" target="_blank" class="btn btn-sm btn-outline-primary">{{ __('AA.View')}}</a>
                  </div>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-lg-4 col-md-4 mb-20">
          <div class="bg-white pd-20 card-box mb-30">
          <h5 class="h4 text-blue">{{ __('AA.active users by most recent')}}</h5>
            <div class="user-list">
              <ul>
              @foreach ($mostUsers->slice(0,5) as $activity)
                <li class="d-flex align-items-center justify-content-between">
                  <div class="name-avatar d-flex align-items-center pr-2">
                    <div class="avatar mr-2 flex-shrink-0">
                      <img src="{{(env('APP_URL'))}}/site/user/{{$activity->user->photo}}" class="border-radius-100 box-shadow" width="50" height="50" alt="">
                    </div>
                    <div class="txt">
                      <div class="font-14 weight-600">{{$activity->user->username}}</div>
                      <div class="font-12 weight-500" data-color="#b2b1b6">{{$activity->user->ip}} | {{$activity->user->ip}}</div>
                    </div>
                  </div>
                  <div class="cta flex-shrink-0">
                    <a href="{{(env('APP_URL'))}}/user/{{$activity->user->id}}/{{Config::get('app.locale')}}" target="_blank" class="btn btn-sm btn-outline-primary">{{ __('AA.View')}}</a>
                  </div>
                </li>
              @endforeach
              </ul>
            </div>
          </div>
        </div>


        <div class="col-xl-9 col-lg-9 col-md-9 mb-20">
          <div class="bg-white pd-20 card-box mb-30">
            <a href="{{(env('APP_URL'))}}/admin/users"><h4 class="h4 text-blue">{{ __('AA.users')}}</h4></a>
            <div id="users"></div>
          </div>
        </div>

      <div class="col-xl-3 col-lg-3 col-md-3 mb-20">
        <div class="card-box height-100-p pd-20">
         <a href="{{(env('APP_URL'))}}/admin/feedbacks"> <h4 class="h4 text-blue">{{ __('AA.feedbacks')}}</h4></a>
          <div class="faq-wrap">

            <div id="accordion">
              @foreach($generals as $get)
                  @if($get->group=="feed-baks")
                    <div class="card">
                      <div class="card-header">
                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#feed-{{$get->id}}">
                          {{__('AA.From')}} @if($get->user) <a href="{{(env('APP_URL'))}}/user/{{$get->user->id}}/{{Config::get('app.locale')}}" target="_blank"> {{$get->user->username}} </a> @else {{__('AA.Guest')}} @endif
                        </button>
                        </div>
                        <div id="feed-{{$get->id}}" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                            {!!$get->help_content!!}
                          </div>
                        </div>
                    </div>
                  @endif
              @endforeach
            </div>

          </div>
        </div>
      </div>

      @foreach($get_routes as $route)
        @if($route->for=="User")
          <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
            <div class="bg-white pd-20 card-box mb-30">
              <a href="{{(env('APP_URL'))}}/admin/{{$route->name}}"><h4 class="h4 text-blue">{{$route->name}}</h4></a>
              <div id="{{$route->name}}s"></div>
            </div>
          </div >
        @endif
      @endforeach

    </div>

@endsection