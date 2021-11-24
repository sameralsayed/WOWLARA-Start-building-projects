<div class="modal fade bs-example-modal-lg" id="general-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                @foreach($add_admin as $names=>$name)
                    @if(str_contains(url()->current(), '/admin/'.$names.''))
                         <h4 class="modal-title" id="myLargeModalLabel">{{ __('AA.New') }} {{ __('AA.'.$name.'') }}</h4>
                    @endif  
                @endforeach       

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                @if(str_contains(url()->current(), '/admin/languages'))
                    <form role="form" method="post" action="{{ route('lang-add') }}" enctype="multipart/form-data">  

                   @elseif(str_contains(url()->current(), '/admin/categorys'))
                     <form role="form" method="post" action="{{ route('category-add') }}" enctype="multipart/form-data">

                   @elseif(str_contains(url()->current(), '/admin/routes'))
                     <form role="form" method="post" action="{{ route('route-add') }}" enctype="multipart/form-data">

                   @elseif(str_contains(url()->current(), '/admin/users'))

                   @elseif(str_contains(url()->current(), '/admin/sub_categorys'))
                     <form role="form" method="post" action="{{ route('Subcategory-add') }}" enctype="multipart/form-data">

                   @elseif(str_contains(url()->current(), '/admin/siteicons'))
                     <form role="form" method="post" action="{{ route('svg-add') }}" enctype="multipart/form-data">
                      
                    @else
                    <form role="form" method="post" action="{{ route('GEL-add') }}" enctype="multipart/form-data">
                @endif 

                @foreach($get_routes as $route)
                  @if($route->for=="User")
                    @if(str_contains(url()->current(), '/admin/'.$route->name.''))
                      <form role="form" method="post" action="{{ route(''.$route->name.'-add') }}" enctype="multipart/form-data">
                    @endif
                  @endif
                @endforeach


                @csrf
                
                @foreach($add_admin as $names=>$name)
                    @if(str_contains(url()->current(), '/admin/'.$names.''))
                    <input type="hidden" value="{{$names}}" name="group" required>
                    <input type="hidden" value="1" name="user_id" required>
                    {!!$$names!!}
                    @endif
                @endforeach

            </div>
            <div class="modal-footer">
                @if(str_contains(url()->current(), '/admin/users'))
                @else
                <button type="submit" class="btn btn-primary b-up b-3d">{{ __('AA.Add')}}</button></form>
                @endif
                <button type="button" class="btn btn-secondary b-up b-3d" data-dismiss="modal">{{ __('AA.Close')}}</button>
            </div>
        </div>
    </div>
</div>