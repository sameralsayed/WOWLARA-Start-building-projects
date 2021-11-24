<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
	<div class="pd-20 card-box">
		<div class="tab">
			<div class="row clearfix">
				<div class="col-md-3 col-sm-12">
                  <ul class="nav flex-column nav-pills vtabs" role="tablist">
                    @foreach($generals as $gen)
                        @if($gen->group=='help_page')
                            @if($gen->status=='Active')
                                @if( Config::get('app.locale')==$gen->local)
	                                <li class="nav-item">
		                                <a class="nav-link" data-toggle="tab" href="#to-{{$gen->id}}" role="tab" aria-selected="false">{{$gen->help_title}}</a>
	                                </li>
                                @endif
				            @endif
		                @endif
	                @endforeach
                  </ul>
				</div>
				<div class="col-md-9 col-sm-12">
                  <div class="tab-content">
                    @foreach($generals as $gen)
                        @if($gen->group=='help_page')
                            @if($gen->status=='Active')
                                @if( Config::get('app.locale')==$gen->local)
	                                <div class="tab-pane fade" id="to-{{$gen->id}}" role="tabpanel">
		                                <div class="pd-20">
			                                {!!$gen->help_content!!}
		                                </div>
	                                </div>
                                @endif
				            @endif
		                @endif
	                @endforeach	
                  </div>
				</div>
			</div>
		</div>
	</div>
</div>