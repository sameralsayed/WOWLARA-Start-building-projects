@if(count($user->verifys))
    @if(Auth::user()->verified=="Yes")
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center">
            <i style="font-size:200px" class="icon-copy dw dw-shield"></i>
            <h1 style="font-size: 50px;">{{ __('AA.Congratulations') }}</h1>
            <h4 style="font-size: 30px;">{{ __('AA.Your account has been verified') }}</h4>
        </div>
    @else
        <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center">
            <i style="font-size:200px" class="icon-copy dw dw-watch"></i>
            <h1 style="font-size: 50px;">{{ __('AA.Under review') }}</h1>
            <h4 style="font-size: 30px;">{{ __('AA.Well let you know when finished') }}</h4>
        </div>
    @endif
@else
    <h4>{!!$Touser["notio"]!!} {{ __('AA.forVerify') }}</h4>
    <form role="form" method="post" action="/user/verif" enctype="multipart/form-data">  
    @csrf
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" name="photo" class="custom-file-input">
			<label class="custom-file-label">{{ __('AA.Choose file')}}</label>
		</div>
	</div>
    <button style="height:40px;width:100%" type="submit" class="btn btn-primary b-zoom b-3d">{{ __('AA.Send')}}</button></form>
@endif