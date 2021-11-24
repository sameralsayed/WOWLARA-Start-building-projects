<!-------------------------------analytic -->
@foreach($generals as $analytic)
    @if($analytic->group=="analytics")
        @if($analytic->status=="Active")
            @if( Config::get('app.locale')==$analytic->local)
                {!!$analytic->analytic_code!!}
            @endif
        @endif
    @endif
@endforeach
<!-------------------------------end analytic -->

<!-------------------------------meta tags -->
@foreach($generals as $code)
    @if($code->group=="custom_codes")
        @if($code->status=="Active")
            @if( Config::get('app.locale')==$code->local)
                @if($code->code_type=="mt")
                    {!!$code->code_code!!}
                @endif
            @endif
        @endif
    @endif
@endforeach
<!-------------------------------end meta tags -->

<!-------------------------------css-->
@foreach($generals as $code)
    @if($code->group=="custom_codes")
        @if($code->status=="Active")
            @if( Config::get('app.locale')==$code->local)
                @if($code->code_type=="css")
                    {!!$code->code_code!!}
                @endif
            @endif
        @endif
    @endif
@endforeach
<!-------------------------------end css-->