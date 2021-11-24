<div class="modal fade" 
    @if(str_contains(url()->current(), '/admin/languages')) 
        id="delete{{$lang->id}}" 
        @else id="delete{{$get->id}}" 
    @endif 
    tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body text-center font-18">
				<h4 class="padding-top-30 mb-30 weight-500">{{ __('AA.You Sure')}}</h4>
				<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
					<div class="col-6">
						<button type="button" class="btn btn-secondary b-up b-3d border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
						{{ __('AA.no')}}
					</div>
					<div class="col-6">
						<button type="button" 
						@if(str_contains(url()->current(), '/admin/languages'))
						onclick="location.href='{{(env('APP_URL'))}}/admin/lang/delete/{{$lang->id}}';"

                        @elseif(str_contains(url()->current(), '/admin/categorys'))
						onclick="location.href='{{(env('APP_URL'))}}/admin/category/delete/{{$lang->id}}';"

                        @elseif(str_contains(url()->current(), '/admin/sub_categorys'))
						onclick="location.href='{{(env('APP_URL'))}}/admin/sub/category/delete/{{$lang->id}}';"

                        @elseif(str_contains(url()->current(), '/admin/routes'))
						onclick="location.href='{{(env('APP_URL'))}}/admin/route/delete/{{$get->id}}';"

                        @elseif(str_contains(url()->current(), '/admin/to_routes'))
						onclick="location.href='{{(env('APP_URL'))}}/admin/page_route/delete/{{$get->id}}';"

						@else
						onclick="location.href='{{(env('APP_URL'))}}/admin/GEL/delete/{{$get->id}}';"

						@endif

                        @foreach($get_routes as $route)
                          @if($route->for=="User")
                            @if(str_contains(url()->current(), '/admin/'.$route->name.''))
                                onclick="location.href='{{(env('APP_URL'))}}/admin/{{$route->name}}/delete/{{$get->id}}';"
                            @endif
                          @endif
                        @endforeach

						class="btn btn-primary b-up b-3d border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-check"></i></button>
						{{ __('AA.yes')}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>