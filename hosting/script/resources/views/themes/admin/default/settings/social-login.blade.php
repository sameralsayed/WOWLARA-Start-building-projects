@extends('themes.admin.default.index') 
@section('content') 
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                  <h3>{{ __('AA.Social Login')}}</h3> 
            </div>
        </div>
    </div>
</div>

<div class="card-box pb-20" style="padding: 25px !important;"><br>
    <div class="pb-20">
  @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor")
    <h6>{!!$admin["notio"]!!} {{__('AA.support 106 system')}}</h6><hr>

        {!!$admin["form"]!!}<ul>
          @foreach($social_logins as $login=>$c) 
            <form role="form" method="post" action="/admin/login/edit" enctype="multipart/form-data">
              @csrf 
              <input name="name" type="hidden" value="{{$login}}" required>
              <li style="padding-bottom:0px;padding-top:10px;">
                    <div class="timeline-date">
                      {{$login}}
                    </div>
                  
                  <div class="timeline-desc card-box">
                    <div class="pd-10 row">
                      <div class="col-md-10"> 

                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="title">
                                      <h3>{{__('AA.Contact with')}} {{$login}}</h3> 
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                              <div class="form-group"> 
                                  <label>CLIENT ID</label>
                                  <input class="form-control" type="text" value="{{(env(''.$login.'_CLIENT_ID'))}}" name="{{$login}}_client_id" placeholder="**********">
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                  <label>CLIENT SECRET</label>
                                  <input class="form-control" type="text" value="{{(env(''.$login.'_CLIENT_SECRET'))}}" name="{{$login}}_client_secret" placeholder="**********">
                              </div>
                            </div>
                          </div>

                         <hr>
                      <h5 class="mb-10 h4">{{__('AA.Documentation')}}</h5>

                      @if (env('APP_ENV')=="local")
                       <pre class="coder"><?php echo "{{(env('";?>{{$login}}_CLIENT_ID<?php echo "'))}}";?></pre>                   
                       <pre class="coder"><?php echo "{{(env('";?>{{$login}}_CLIENT_SECRET<?php echo "'))}}";?></pre> 

                       <pre class="coder">@ if(env('{{$login}}_status')=="Active" or "inActive") @ endif</pre>   

                       <pre class="coder">{{(env('APP_URL'))}}/auth/{{$login}}/callback</pre>                    
                      @endif     

                    </div>

                    <div class="col-md-2">
                     <input name="{{$login}}_status" type="hidden" value="inActive" required>
                        <input type="checkbox" name="{{$login}}_status" 
                        value="Active"  
                         @if(env(''.$login.'_status')=="Active") checked="checked" @endif
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                    </div> 
                  </div>
                </div>
              </li>
          @endforeach 
        </ul> {!!$admin["eform"]!!}
        <button style="width:100% !important" type="submit" class="btn btn-primary b-up b-3d">{{ __('AA.Save')}}</button></form>
    </div> 
  @endif  
</div>
@endsection