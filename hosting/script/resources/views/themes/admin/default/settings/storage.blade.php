@extends('themes.admin.default.index') 
@section('content') 
<div class="card-box mb-30" style="padding:30px">
    <div class="pb-20">
        <div class="tab">
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/storage/edit" enctype="multipart/form-data">
            @csrf
            {!!$select_storage_optn!!}
        	<div class="row clearfix">

        		<div class="col-md-2 col-sm-12">
        			<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                        @foreach($storage_optn as $name)
        				<li class="nav-item">
        					<a class="nav-link" data-toggle="tab" href="#{{$name}}" role="tab" aria-selected="true">{{$name}}</a>
        				</li>
                        @endforeach
        			</ul>
        		</div> 

        		<div class="col-md-10 col-sm-12">
        		  <div class="tab-content">
                    @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor")
        			<div class="tab-pane fade" id="s3" role="tabpanel">
        				<div class="pd-20"> 
                        {!!$admin["form"]!!}
                            @foreach($storage_aws as $s) 
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
                    @endif
        			</div>
        		</div>
                
        	</div>
        </div>
    </div>
</div>

@endsection