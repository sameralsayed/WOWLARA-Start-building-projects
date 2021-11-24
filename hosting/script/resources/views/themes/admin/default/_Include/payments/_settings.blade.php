    <div class="pb-20">
        <div class="tab">
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/pay/edit" enctype="multipart/form-data">
            @csrf
        	<div class="row clearfix">

        		<div class="col-md-2 col-sm-12">
        			<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($pay_optn as $name)
        				<li class="nav-item">
        					<a class="nav-link" data-toggle="tab" href="#{{$name}}" role="tab" aria-selected="true">{{$name}}</a>
        				</li>
                        @endforeach
        			</ul>
        		</div> 
                @if(Auth::user()->role=="Admin")
        		<div class="col-md-10 col-sm-12">
        		  <div class="tab-content">
        			<div class="tab-pane fade" id="Paypal" role="tabpanel">
        				<div class="pd-20"> 
                        {!!$admin["form"]!!}
                            <input name="PAYPAL_status" type="hidden" value="inActive" required>
                            <input type="checkbox" name="PAYPAL_status" value="Active"
                            @if (env('PAYPAL_status')=="Active") checked="checked" @endif
                            class="switch-btn" data-color="#13e643" data-secondary-color="red">

                            @foreach($pay_paypal as $s) 
                                {!!$admin["open"]!!} {{__('AA.'.$s.'')}}
                                    {!!$admin["and"]!!}       
                                     @if (env('APP_ENV')=="local")
                                      <pre class="coder"><?php echo "{{(env('";?>{{$s}}<?php echo "'))}}";?></pre> 
                                     @endif     
                                    <input type="text" class="form-control" name="{{$s}}" value="{{(env(''.$s.''))}}">
                                {!!$admin["close"]!!}    
                            @endforeach 
                        {!!$admin["eform"]!!}
        				</div>
        			</div>
                    <div class="tab-pane fade" id="Stripe" role="tabpanel">
                        <div class="pd-20"> 
                        {!!$admin["form"]!!}

                            <input name="STRIPE_status" type="hidden" value="inActive" required>
                            <input type="checkbox" name="STRIPE_status" value="Active"
                            @if (env('STRIPE_status')=="Active") checked="checked" @endif
                            class="switch-btn" data-color="#13e643" data-secondary-color="red">

                            @foreach($pay_stripe as $s) 
                                {!!$admin["open"]!!} {{__('AA.'.$s.'')}}
                                    {!!$admin["and"]!!}       
                                     @if (env('APP_ENV')=="local")
                                      <pre class="coder"><?php echo "{{(env('";?>{{$s}}<?php echo "'))}}";?></pre> 
                                     @endif     
                                    <input type="text" class="form-control" name="{{$s}}" value="{{(env(''.$s.''))}}">
                                {!!$admin["close"]!!}    
                            @endforeach 
                        {!!$admin["eform"]!!}
                        </div>
                    </div>
                    <button type="submit" style="width: 100%" class="btn btn-primary b-up b-3d">{{ __('AA.Save')}}</button></form>
        			</div>
        		</div>
                @endif
                
        	</div>
        </div>
    </div>