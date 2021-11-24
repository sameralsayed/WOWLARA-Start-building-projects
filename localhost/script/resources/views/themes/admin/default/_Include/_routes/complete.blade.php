<div class="card-box mb-30"><br>
  <div class="pb-20">
    <div class="tab">
      <div class="row clearfix">

        <div class="col-md-2 col-sm-12">
          <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
            @foreach($theme_optn as $optn)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#optn-{{$optn}}" role="tab" aria-selected="false"><span class="micon dw dw-diagram"></span> {{$optn}}</a>
            </li>
            @endforeach
          </ul> 
        </div>

        <div class="col-md-10 col-sm-12">

          <div class="tab-content">
            @foreach($theme_optn as $optn)
              <div class="tab-pane fade" id="optn-{{$optn}}" role="tabpanel">
                <div class="pd-20">
 
                  <div class="tab">
                    <div class="row clearfix">

                      <div class="col-md-2 col-sm-12">
                        <p style="margin-left:10px">{{ __('AA.Theme')}}</p><hr>
                        <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                          @foreach($generals as $thm)
                            @if($thm->group=="themes")
                              @if($thm->theme_to=="$optn")
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#get{{$optn}}-{{$thm->theme_name}}" role="tab" aria-selected="false">{{$thm->theme_name}}</a>
                                </li>
                              @endif
                            @endif
                          @endforeach
                        </ul>
                      </div>

                      <div class="col-md-10 col-sm-12">
                        <div class="tab-content">
                          @foreach($generals as $thm)  
                            @if($thm->group=="themes")
                            @if($thm->theme_to==$optn)   
                            <div class="tab-pane fade" id="get{{$optn}}-{{$thm->theme_name}}" role="tabpanel">
                              <div class="pd-20">
                                <table class="table hover multiple-select-row data-table-export nowrap">

                                  <thead>
                                    <tr>
                                      @Include('themes.admin.default._Include._thead')
                                      <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                 @foreach($get_routes as $get)
                                    @if($get->for==$optn)
                                      @if($get->$optn==$thm->theme_name)
                                         @Include('themes.admin.default._Include._edit')
                                         @Include('themes.admin.default._Include._delete') 
                                         <tr>
                                            @Include('themes.admin.default._Include._tbody')        
                                           <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$get->created_at->ago()}}</td>
                                           <td {!!$tooltip!!}"{{__('AA.Date of last update')}}">{{$get->updated_at->ago()}}</td>

                                           @if($get->for=="User")
                                           <td {!!$tooltip!!}"{{__('AA.Date of last update')}}"><a class="btn btn-success b-up b-3d" href="#" role="button" data-toggle="modal" data-target="#Routes-{{$get->id}}"><i class="icon-copy dw dw-flow"></i> 
                                           {{ __('AA.Routes')}}</a></td>  
                                           @Include('themes.admin.default._Include._routes')      
                                           @endif   

                                           <td {!!$tooltip!!}"{{__('AA.Delete')}}">@Include('themes.admin.default._Include._actions')</td>
                                         </tr>
                                      @endif
                                    @endif
                                 @endforeach 
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            @endif
                            @endif
                          @endforeach
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