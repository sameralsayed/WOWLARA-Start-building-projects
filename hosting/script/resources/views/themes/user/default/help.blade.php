@extends('themes.user.default.layouts.app')
@section('content')
	<div class="main-container header-dark" style="padding: 80px 20px 2px 30px;">
	    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
		    <div class="pd-20 card-box">
			    <div class="tab">
				    <ul class="nav nav-pills" role="tablist">
					    <li style="width: 25%;" class="nav-item">
						    <a class="nav-link active text-blue" data-toggle="tab" href="#info" role="tab" aria-selected="true"><i class="icon-copy dw dw-information"></i> {{ __('AA.informations') }}</a>
					    </li>
					    <li style="width: 25%;" class="nav-item">
						    <a class="nav-link text-blue" data-toggle="tab" href="#page-help" role="tab" aria-selected="false"><i class="icon-copy dw dw-help"></i> {{ __('AA.Help Page') }}</a>
					    </li>
					    @if($get->company_address)
					    <li style="width: 25%;" class="nav-item">
						    <a class="nav-link text-blue" data-toggle="tab" href="#Company" role="tab" aria-selected="false"><i class="icon-copy dw dw-open-book"></i> {{ __('AA.Company') }}</a>
					    </li>
					    @endif
					    @if($get->advertise_title)
					    <li style="width: 25%;" class="nav-item">
						    <a class="nav-link text-blue" data-toggle="tab" href="#advertise-us" role="tab" aria-selected="false"><i class="icon-copy dw dw-sprout-1"></i> {{ __('AA.Advertise US') }}</a>
					    </li>
					    @endif

				    </ul>
			        <div class="tab-content">
				        <div class="tab-pane fade show active" id="info" role="tabpanel">
					        <div class="pd-20">

					        <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						        <div class="pd-20 card-box">
							        <div class="tab">
								        <div class="row clearfix">
									        <div class="col-md-3 col-sm-12">
										        <ul class="nav flex-column nav-pills vtabs" role="tablist">
                                                    @foreach($for_help as $id=>$name)
                                                      @if($get->$id)
											            <li class="nav-item">
												            <a class="nav-link" data-toggle="tab" href="#{{$id}}" role="tab" aria-selected="false">{{ __('AA.'.$name.'') }}</a>
											            </li>
										              @endif
                                                    @endforeach
										            <li class="nav-item">
											            <a class="nav-link" data-toggle="tab" href="#faqs" role="tab" aria-selected="false">{{ __('AA.faqs') }}</a>
										            </li>
										        </ul>
									        </div>
									        <div class="col-md-9 col-sm-12">
										        <div class="tab-content">
                                                    @foreach($for_help as $id=>$name)
                                                        @if($get->$id)
											                <div class="tab-pane fade" id="{{$id}}" role="tabpanel">
												                <div class="pd-20">
													                {!!$get->$id!!}
												                </div>
											                </div>
										                @endif
                                                    @endforeach	
											        <div class="tab-pane fade" id="faqs" role="tabpanel">
												        <div class="pd-20">
													        @Include('themes.user.default._help.faqs')
												        </div>
											        </div>		
										        </div>
									        </div>
								        </div>
							        </div>
						        </div>
					        </div>

						    </div>
					    </div>
					    <div class="tab-pane fade" id="page-help" role="tabpanel">
						    <div class="pd-20">
							    @Include('themes.user.default._help.help-page')
						    </div>
					    </div>
					    <div class="tab-pane fade" id="Company" role="tabpanel">
						    <div class="pd-20">
							    @Include('themes.user.default._help.company-Info')
						    </div>
					    </div>
					    <div class="tab-pane fade" id="advertise-us" role="tabpanel">
						    <div class="pd-20">
							    @Include('themes.user.default._help.advertise-us')
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
@endsection 