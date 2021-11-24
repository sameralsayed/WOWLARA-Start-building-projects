@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._add')
<div class="page-header">
    <div class="row">

        <div class="col-md-5 col-sm-12">
            <div class="title">
                  <h3>{{ __('AA.themes')}}</h3> 
                  <hr>
                  <h5>{{ __('AA.info_template')}}</h5>
            </div>
        </div>

        <div class="col-md-3 col-sm-12">
          @if (env('APP_ENV')=="local")
          @Include('themes.admin.default.doc-windos')
            <a class="btn btn-primary b-up b-3d" style="margin-right:10px" href="#docum" role="button" data-toggle="modal" data-target="#docum"><i class="icon-copy dw dw-information"></i> {{ __('AA.documentation')}}</a>
          @endif
        </div>

        <div class="col-md-4 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-success b-up b-3d" href="#" role="button" data-toggle="modal" data-target="#general-add"><i class="icon-copy dw dw-add"></i> 
              {{ __('AA.New')}}
                </a>
            </div>
        </div>


    </div>
</div>
<div class="card-box mb-30"><br>
    <div class="pb-20">
        <div class="tab">
            <div class="row clearfix">

                <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($langs as $lang)
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#to-{{$lang->id}}" role="tab" aria-selected="false"><i class="icon-copy fa fa-language" aria-hidden="true"></i> {{$lang->name}}</a>
                        </li>
                        @endforeach
                    </ul> 
                </div>

                <div class="col-md-10 col-sm-12">

                    <div class="tab-content">
                        @foreach($langs as $lang)
                            <div class="tab-pane fade" id="to-{{$lang->id}}" role="tabpanel">
                                <div class="pd-20">
                                  <div class="tab">
                                    <div class="row clearfix">

                                      <div class="col-md-2 col-sm-12">
                                        <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">

                                          <li class="nav-item">
                                             <a class="nav-link active" data-toggle="tab" href="#Admin-{{$lang->id}}" role="tab" aria-selected="true">{{__('AA.Admin')}}</a>
                                          </li>

                                          <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#User-{{$lang->id}}" role="tab" aria-selected="false">{{__('AA.User')}}</a>
                                          </li>

                                        </ul>
                                      </div>

                                      <div class="col-md-10 col-sm-12">
                                        <div class="tab-content">

                                          <div class="tab-pane fade show active" id="Admin-{{$lang->id}}" role="tabpanel">
                                            <div class="pd-20"> 
                                                @Include('themes.admin.default._Include._themes.admin')
                                            </div>
                                          </div>

                                          <div class="tab-pane fade" id="User-{{$lang->id}}" role="tabpanel">
                                            <div class="pd-20"> 
                                                @Include('themes.admin.default._Include._themes.user')
                                            </div>
                                          </div>

                                        </div>
                                      </div>

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