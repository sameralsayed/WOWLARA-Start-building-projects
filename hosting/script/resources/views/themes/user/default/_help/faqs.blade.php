<div class="faq-wrap">
	<div id="accordion">
        @foreach($generals as $gen)
            @if($gen->group=='faqs')
                @if($gen->status=='Active')
                    @if( Config::get('app.locale')==$gen->local)
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq1">
								    {{$gen->faq_question}}
								</button>
							</div> 
							<div id="faq1" class="collapse" data-parent="#accordion">
							 <div class="card-body">
							 	    {!!$gen->faq_answer!!}
								</div>
							</div>
						</div>
					@endif
				@endif
		    @endif
	    @endforeach
	</div>
</div>