<div class="col-lg-12 col-md-12 mb-20">
	<div class="card-box height-100-p pd-20 min-height-200px">
		<div class="max-width-300 mx-auto" style="text-align:center;font-size:180px;color:#000000;">
			<i class="icon-copy ion-ios-bolt-outline"></i>
		</div>
		<div class="text-center">
			<div class="h1 mb-1">{{ __('AA.Advertise with us starting at $') }}{{$get->advertise_price}} {{ __('AA.a day') }}</div>
			<div class="h3 font-14 weight-500 mx-auto pb-20">
				{{$get->advertise_title}}
			</div>
			<div class="h6 font-14 weight-500 mx-auto pb-20" data-color="#a6a6a7">
				{!!$get->advertise_message!!}
			</div>							
			<a href="mailto:{{$get->advertise_mail}}" class="btn btn-primary btn-lg">{{ __('AA.Send a request') }}</a>
		</div>
	</div>
</div>