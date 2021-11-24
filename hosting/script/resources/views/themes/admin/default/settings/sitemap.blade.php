@extends('themes.admin.default.index') 
@section('content') 
<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
    <div class="pd-20 card-box">
    <h5 class="h4 text-blue mb-20">{{ __('AA.sitemap')}}</h5>
    <div class="tab">
    <pre class="coder">{{(env('APP_URL'))}}/sitemap.xml</pre>
     <p>{{ __('AA.An unlimited number can be created with the ability to split files')}} {{(env('SITEMAP_MAX'))}}</p>
     <p>{{ __('AA.All languages will be added automatically')}}</p>

     <button onclick="location.href='{{(env('APP_URL'))}}/StartSitemap';" style="width: 100%" class="btn btn-primary b-up b-3d">{{ __('AA.Create')}}</button><hr>

    <h5 class="h4 text-blue mb-20">{{ __('AA.Settings')}}</h5>
        <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/sitemap/edit" enctype="multipart/form-data">
            @csrf
            <div class="pd-20"> 
                {!!$admin["form"]!!}
                    @foreach($form_sitemap as $s) 
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
        <button type="submit" style="width: 100%" class="btn btn-primary b-up b-3d">{{ __('AA.Save')}}</button></form>
    </div>

    </div>
</div>
@endsection