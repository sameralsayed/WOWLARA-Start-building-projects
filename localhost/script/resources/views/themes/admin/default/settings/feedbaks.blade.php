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

                    @foreach($langs as $lang)
                      <div class="tab-pane fade" id="to-{{$lang->id}}" role="tabpanel">
                        <div class="pd-20">
                          <div class="faq-wrap">
                            <div id="accordion">
                              @foreach($generals as $get)
                                @if($get->local==$lang->language)
                                  @if($get->group=="feed-baks")
                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#feed-{{$get->id}}">
                                             {{__('AA.From')}} @if($get->user) [ <a href="/user/{{$get->user->id}}/{{Config::get('app.locale')}}" target="_blank"> {{$get->user->username}} </a> ] @else {{__('AA.Guest')}} @endif - {{$get->created_at->ago()}} | @if(Auth::user()->role=="Admin") <a href="/admin/GEL/delete/{{$get->id}}"><i class="icon-copy dw dw-delete-3"></i> {{ __('AA.Delete')}}</a> @endif
                                            </button>
                                        </div>
                                        <div id="feed-{{$get->id}}" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            {!!$get->help_content!!}
                                        </div>
                                        </div>
                                    </div>
                                  @endif
                                @endif
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>

            </div>
        </div>
    </div>   
</div>
@endsection