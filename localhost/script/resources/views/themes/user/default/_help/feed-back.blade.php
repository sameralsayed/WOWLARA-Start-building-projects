<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered b-zoom">
		<div class="modal-content b-zoom">
			<button style="text-align:right;padding:20px" type="button" class="close b-up" data-dismiss="modal" aria-hidden="true">×</button>
			<div class="modal-body">
		         <div class="text-center">
		         	<i style="font-size:100px;" class="icon-copy dw dw-quotation b-glow iicon b-3d"></i>
			         <div style="margin-top:20px;" class="h4 mb-20">{{ __('AA.We love to hear from you') }}</div>
                    <form role="form" method="post" action="{{ route('GEL-add') }}" enctype="multipart/form-data">
                    	@csrf
                     <input type="hidden" value="feed-baks" name="group" required>
                     <input type="hidden" value="{{Config::get('app.locale')}}" name="local" required>
                     @if(!Auth::guest())
                     <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" required>
                     @else
                     <input type="hidden" value="Guest" name="name" required>
                     @endif
			         {!!$input_feedback_user!!}
			         <input class="btn btn-primary btn-lg btn-block b-up b-3d" type="submit" value="{{ __('AA.Send')}}"></form>
		         </div>
			</div>
		</div>
	</div>
</div>