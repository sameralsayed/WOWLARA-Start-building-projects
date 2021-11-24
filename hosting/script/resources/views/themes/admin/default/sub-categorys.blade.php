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
           <li style="margin-left:10px">{{ __('AA.languages')}}</li><hr>       
            @foreach($langs as $lang)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#lang-{{$lang->id}}" role="tab" aria-selected="false"><i class="icon-copy fa fa-language" aria-hidden="true"></i> {{$lang->name}}</a>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="tab-content">
            @foreach($langs as $lang)
              <div class="tab-pane fade" id="lang-{{$lang->id}}" role="tabpanel">
                <div class="pd-20">
 
                  <div class="tab">
                    <div class="row clearfix">

                      <div class="col-md-2 col-sm-12">
                        <p>{{ __('AA.Pages')}}</p><hr>                      
                        <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                          @foreach($get_routes as $route)
                            @if($route->for=="User")   
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#get{{$lang->id}}-{{$route->name}}" role="tab" aria-selected="false">{{$route->name}}</a>
                            </li>
                            @endif
                          @endforeach
                        </ul>
                      </div>

                      <div class="col-md-10 col-sm-12">
                        <div class="tab-content">
                          @foreach($get_routes as $route)  
                            @if($route->for=="User")            
                            <div class="tab-pane fade" id="get{{$lang->id}}-{{$route->name}}" role="tabpanel">
                              <div class="pd-20">

                                <div class="tab">
                                  <div class="row clearfix">

                                    <div class="col-md-3 col-sm-12">
                                     <p>{{ __('AA.Categorys')}}</p><hr>
                                      <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                                        @foreach($get_categorys as $category)
                                          @if($category->to==$route->name)
                                          <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#get{{$lang->id}}-{{$route->name}}-{{$category->id}}" role="tab" aria-selected="false">{{$category->name}}</a>
                                          </li>
                                          @endif
                                        @endforeach
                                      </ul>
                                    </div>

                                    <div class="col-md-9 col-sm-12">
                                      <div class="tab-content">
                                        @foreach($get_categorys as $category) 
                                          @if($category->to==$route->name)          
                                          <div class="tab-pane fade" id="get{{$lang->id}}-{{$route->name}}-{{$category->id}}" role="tabpanel">
                                            <div class="pd-20">

                                              <table class="table hover multiple-select-row data-table-export nowrap">

                                                <thead>
                                                  <tr>
                                                    @Include('themes.admin.default._Include._thead')
                                                    <th>{{ __('AA.Added')}}</th> 
                                                    <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
                                                  </tr>
                                                </thead>

                                                <tbody>
                                                  @foreach($get_sub_categorys as $get)
                                                    @if($get->local==$lang->language)
                                                          @if($get->category_id==$category->id)
                                                          @Include('themes.admin.default._Include._edit')
                                                          @Include('themes.admin.default._Include._delete')
                                                          <tr>
                                                            @Include('themes.admin.default._Include._tbody')
                                                            <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$get->created_at->ago()}}</td>
                                                            <td {!!$tooltip!!}"{{__('AA.Edit & Delete')}}">@Include('themes.admin.default._Include._actions')</td>
                                                          </tr>
                                                          @endif
                                                    @endif
                                                  @endforeach 
                                                </tbody>
                                              </table>

                                            </div>
                                          </div>
                                          @endif
                                        @endforeach <!--categorys --> 
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            @endif
                          @endforeach <!--features --> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach <!--languages --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection