<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content b-zoom">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">{{ __('AA.Contact US') }}</h4>
				<button type="button" class="close b-up" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body" style="padding:50px;">
		         <div class="text-center">
		         	<i style="font-size:120px;padding:30px" class="icon-copy dw dw-email2 b-glow iicon b-3d"></i>
			         <div class="h4 mb-20">{{$get->contact_noti}}</div>							
			         <a style="margin-top:30px;" href="mailto:{{$get->contact_mail}}" class="btn btn-primary btn-lg b-up">{{ __('AA.Send a request') }}</a>
		         </div>
			</div>
		</div>
	</div>
</div>