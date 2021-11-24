@if(!Auth::guest())

@foreach($table_users as $user) 
  @if(Auth::user()->id==$user->id)
    @if(Auth::user()->status=="Active")

        @Include('themes.user.default.layouts.chunked.systems')

        @else
        <style type="text/css">
            @Include('themes.user.default._Include.css._theme')
        </style>
        <div class="main-container">
	        <div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		        <div class="pd-10">
			        <div class="error-page-wrap text-center">
				        <h2>{{ __('AA.block')}}</h2>
				        <h5>{{$get->blocked_user}}</h3>
			        </div>
		        </div>
	        </div>
        </div>
    @endif
  @endif
@endforeach

@else
    @Include('themes.user.default.layouts.chunked.systems')
@endif  
