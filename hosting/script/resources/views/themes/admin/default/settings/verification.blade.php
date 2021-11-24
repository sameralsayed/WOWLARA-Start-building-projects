@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._add')
@Include('themes.admin.default._Include._title')
<div class="card-box mb-30"><br>
    <div class="pb-20">
        <div class="tab">
            <div class="row clearfix">

                <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($langs as $lang)
                        <li class="nav-item">
                            <a class="nav-link b-up" data-toggle="tab" href="#to-{{$lang->id}}" role="tab" aria-selected="false"><i class="icon-copy fa fa-language" aria-hidden="true"></i> {{$lang->name}}</a>
                        </li>
                        @endforeach
                    </ul> 
                </div>

                <div class="col-md-10 col-sm-12">
                    <div class="tab-content">
                      @if(Auth::user()->role=="Admin")
                        @foreach($langs as $lang)
                            <div class="tab-pane fade" id="to-{{$lang->id}}" role="tabpanel">
                                <div class="pd-20">

                                  @foreach($get_verifys as $get)
                                    @if($get->user->local==$lang->language)
                                    
                                      <div class="col-lg-6 col-md-5 mb-20">
                                        <div class="card-box height-100-p pd-20">
                                          <div class="max-height-300">
                                            <img style="height:300px;" src="{{(env('APP_URL'))}}/verifys/{{$get->photo}}" alt="">
                                          </div>
                                          <div class="text-left">
                                           <div class="h5 mb-11 mt-15">{{ __('AA.verification request from')}} <a href="{{(env('APP_URL'))}}/user/{{$get->user->id}}/{{Config::get('app.locale')}}" target="_blank"> [ {{$get->user->username}} ] </a></div>

                                          @if($get->user->verified=="Yes")
                                          <form role="form" method="post" action="/update/verified/{{$get->id}}">
                                            @csrf
                                            <input type="hidden" name="verified" value="No">
                                           <button style="width:100%" type="submit" {!!$tooltip!!}"{{__('AA.Click to cancel verification')}}" class="btn btn-success mb-10">{{ __('AA.Has been verified')}}</button></form>
                                          @else 
                                          <form role="form" method="post" action="/update/verified/{{$get->id}}">
                                            @csrf
                                            <input type="hidden" name="verified" value="Yes">
                                           <button style="width:100%" type="submit" {!!$tooltip!!}"{{__('AA.Click to verification')}}" class="btn btn-danger mb-10">{{ __('AA.no verification')}}</button></form>
                                          @endif
                                
                                          <a href="{{(env('APP_URL'))}}/verifys/{{$get->photo}}" download>
                                           <button style="width:100%" type="submit" class="btn btn-warning mb-10">{{ __('AA.Download')}}</button>
                                           </a>
                                        </div>
                                      </div>
                                    </div>

                                  @endif
                                @endforeach
                                  
                                </div>
                            </div>
                        @endforeach
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection