<div class="container pd-0">
	<div class="timeline mb-30">
		<ul>
			@foreach($comp_help as $data=>$name)
			<li style="padding-bottom:0px;padding-top:10px;">
				<div class="timeline-date">
					{{ __('AA.'.$name.'') }}
				</div>
				<div class="timeline-desc card-box">
					<div class="pd-20">
						<h5 class="mb-10 h4">{!!$get->$data!!}</h5>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
</div>