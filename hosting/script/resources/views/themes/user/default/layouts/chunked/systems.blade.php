@foreach($systems as $system=>$title) 
    @if(Browser::$system())
        @if( Config::get('app.locale')==$get->language)
            @if($get->$system=="Active")
                @Include('themes.user.default.layouts.chunked.device')

            @else
            <style type="text/css">
                @Include('themes.user.default._Include.css._theme')
            </style>
            <div class="main-container">
                <div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
                    <div class="pd-10">
                        <div class="error-page-wrap text-center">
                            <h2>{{ __('AA.block')}}</h2>
                        </div>
                    </div>
                </div>
            </div> 
            @endif
        @endif 
    @endif
@endforeach