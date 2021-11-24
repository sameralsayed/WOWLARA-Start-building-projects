@extends('themes.user.default.layouts.app') 
@section('content')
<div class="main-container">
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
				<h1>404</h1>
				<h3>{{$get->error_403}}</h3>
			</div>
		</div>
	</div>
</div>
@endsection   