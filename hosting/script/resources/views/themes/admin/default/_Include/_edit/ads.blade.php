     <br>
     <hr>
        <div class="tab">
          <div class="row clearfix">
               <div class="col-md-2 col-sm-12">
                    <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Desktop-{{$lang->id}}" role="tab" aria-selected="true">{{ __('AA.Desktop')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Tablet-{{$lang->id}}" role="tab" aria-selected="true">{{ __('AA.Tablet')}}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Mobile-{{$lang->id}}" role="tab" aria-selected="true">{{ __('AA.Mobile')}}</a>
                        </li>

                    </ul>
               </div>
               <div class="col-md-10 col-sm-12">
                    <div class="tab-content">
                         <div class="tab-pane fade show active" id="Desktop-{{$lang->id}}" role="tabpanel">
                              <div class="pd-20">  
                                   <div class="row form-group">
                                    <h6>{!!$admin["notio"]!!} {{ __('AA.The advertisement will be activated when placing the code according to each page')}}</h6>
                                    {!!$admin["form"]!!}
                                        @foreach($get_routes as $route) 
                                          @if($route->for=="User") 
                                            <?php $ADdesktop = ''.$route->name.'ADdesktop'; ?>
                                            {!!$admin["open"]!!} {{$route->name}}
                                                {!!$admin["and"]!!}
                                                    @if (env('APP_ENV')=="local")
                                                      <pre class="coder"><?php echo "{!!\$";?><?php echo "get";?>->{{$ADdesktop}}<?php echo "!!}";?></pre> 
                                                    @endif  
                                                    <textarea type="text" placeholder="{{__('AA.Code')}}" class="form-control" name="{{$ADdesktop}}" >{{$lang->$ADdesktop}}</textarea>
                                            {!!$admin["close"]!!}
                                          @endif    
                                        @endforeach 
                                    {!!$admin["eform"]!!}
                                   </div>
                              </div>
                         </div>

                        <div class="tab-pane fade" id="Tablet-{{$lang->id}}" role="tabpanel">
                            <div class="pd-20"> 
                                <div class="row form-group">
                                  <h6>{!!$admin["notio"]!!} {{ __('AA.The advertisement will be activated when placing the code according to each page')}}</h6>
                                    {!!$admin["form"]!!}
                                        @foreach($get_routes as $route) 
                                          @if($route->for=="User") 
                                            <?php $ADtablet = ''.$route->name.'ADtablet'; ?>
                                            {!!$admin["open"]!!} {{$route->name}}
                                                {!!$admin["and"]!!}
                                                    @if (env('APP_ENV')=="local")
                                                      <pre class="coder"><?php echo "{!!\$";?><?php echo "get";?>->{{$ADtablet}}<?php echo "!!}";?></pre> 
                                                    @endif   
                                                    <textarea type="text" placeholder="{{__('AA.Code')}}" class="form-control" name="{{$ADtablet}}" >{{$lang->$ADtablet}}</textarea>
                                            {!!$admin["close"]!!}
                                          @endif    
                                        @endforeach 
                                    {!!$admin["eform"]!!}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Mobile-{{$lang->id}}" role="tabpanel">
                            <div class="pd-20"> 
                                <div class="row form-group">
                                  <h6>{!!$admin["notio"]!!} {{ __('AA.The advertisement will be activated when placing the code according to each page')}}</h6>
                                    {!!$admin["form"]!!}
                                        @foreach($get_routes as $route) 
                                          @if($route->for=="User") 
                                            <?php $ADmobile = ''.$route->name.'ADmobile'; ?>
                                            {!!$admin["open"]!!} {{$route->name}}
                                                {!!$admin["and"]!!}
                                                    @if (env('APP_ENV')=="local")
                                                      <pre class="coder"><?php echo "{!!\$";?><?php echo "get";?>->{{$ADmobile}}<?php echo "!!}";?></pre> 
                                                    @endif   
                                                    <textarea type="text" placeholder="{{__('AA.Code')}}" class="form-control" name="{{$ADmobile}}" >{{$lang->$ADmobile}}</textarea>
                                            {!!$admin["close"]!!}
                                          @endif    
                                        @endforeach 
                                    {!!$admin["eform"]!!}
                                </div>
                            </div>
                        </div>

                    </div>
               </div>
          </div>
        </div>                