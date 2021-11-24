@extends('themes.admin.default.index') 
@section('content') 
<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
    <div class="pd-20 card-box">
        <h5 class="h4 text-blue mb-20">{{ __('AA.payments')}}</h5>

        @if (env('APP_ENV')=="local")
        @Include('themes.admin.default.doc-windos')
            <a class="btn btn-primary b-up b-3d" style="margin-right:10px" href="#docum" role="button" data-toggle="modal" data-target="#docum"><i class="icon-copy dw dw-information"></i> {{ __('AA.documentation')}}</a>
        @endif

        <div class="tab">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li style="width:33.3%" class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#settings" role="tab" aria-selected="true"><i class="icon-copy dw dw-settings1"></i> {{ __('AA.Settings')}}</a>
                </li>
                <li style="width:33.3%" class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#prics" role="tab" aria-selected="false"><i class="icon-copy dw dw-list3"></i> {{ __('AA.Plans')}}</a>
                </li>
                <li style="width:33.3%" class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#subscribers" role="tab" aria-selected="false"><i class="icon-copy dw dw-user1"></i> {{ __('AA.Subscribers')}}</a>
                </li>              
            </ul>
            <div class="tab-content">
            @if(Auth::user()->role=="Admin" || Auth::user()->role=="Editor")
                <div class="tab-pane fade show active" id="settings" role="tabpanel">
                <hr>
                    @Include('themes.admin.default._Include.payments._settings')
                </div>

                <div class="tab-pane fade" id="prics" role="tabpanel">
                    @Include('themes.admin.default._Include.payments._prics')
                </div>

                <div class="tab-pane fade" id="subscribers" role="tabpanel">
                    @Include('themes.admin.default._Include.payments._subscribers')
                </div> 
            @endif
            </div>
        </div>
    </div>
</div>
@endsection