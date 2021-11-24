<div class="card-box mb-30"><br>
    <div class="pb-20">
        <div class="tab">
            <div class="row clearfix">
                <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($get_routes as $route)
                        @if($route->for=="User")
                        <li class="nav-item">
                            <a class="nav-link b-up" data-toggle="tab" href="#to-{{$route->id}}" role="tab" aria-selected="false">{{$route->name}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul> 
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="tab-content">
                        @foreach($get_routes as $route)
                          @if($route->for=="User")
                            <div class="tab-pane fade" id="to-{{$route->id}}" role="tabpanel">
                                <div class="pd-20">

                                <table class="table hover multiple-select-row data-table-export nowrap">

                                  <thead>
                                    <tr>
                                      @Include('themes.admin.default._Include._thead')
                                      <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                 @foreach($pages_routes as $get)
                                    @if($get->route==$route->name)
                                         @Include('themes.admin.default._Include._edit')
                                         @Include('themes.admin.default._Include._delete') 
                                         <tr>
                                            @Include('themes.admin.default._Include._tbody')        
                                           <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$get->created_at->ago()}}</td>
                                           <td {!!$tooltip!!}"{{__('AA.Date of last update')}}">{{$get->updated_at->ago()}}</td>

                                           @if($get->for=="User")
                                           <td {!!$tooltip!!}"{{__('AA.Date of last update')}}"><a class="btn btn-success b-up b-3d" href="#" role="button" data-toggle="modal" data-target="#Routes-{{$get->id}}"><i class="icon-copy dw dw-add"></i> 
                                           {{ __('AA.Routes')}}</a></td>  
                                           @Include('themes.admin.default._Include._routes')      
                                           @endif   

                                           <td {!!$tooltip!!}"{{__('AA.Edit & Delete')}}">@Include('themes.admin.default._Include._actions')</td>
                                         </tr>
                                    @endif
                                 @endforeach 
                                  </tbody>
                                </table>
                                  
                                </div>
                            </div>
                          @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>