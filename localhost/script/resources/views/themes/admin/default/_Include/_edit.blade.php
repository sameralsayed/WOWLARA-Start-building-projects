<div class="modal fade bs-example-modal-lg" 
        @if(str_contains(url()->current(), '/admin/languages')) 
            id="edit{{$lang->id}}" 
            @else id="edit{{$get->id}}" 
        @endif 
    tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

            <h4 class="modal-title" id="myLargeModalLabel">{{ __('AA.Edit') }} {{$get->name}}</h4>
            <button type="button" class="close b-zoom" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">

                @if(str_contains(url()->current(), '/admin/languages'))
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/lang/edit/{{$lang->id}}" enctype="multipart/form-data"> 

                  @elseif(str_contains(url()->current(), '/admin/users'))
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/edit/user/{{$get->id}}" enctype="multipart/form-data">

                  @elseif(str_contains(url()->current(), '/admin/to_routes'))
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/page_route/edit/{{$get->id}}" enctype="multipart/form-data">

                  @elseif(str_contains(url()->current(), '/admin/categorys'))
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/category/edit/{{$get->id}}" enctype="multipart/form-data">

                  @elseif(str_contains(url()->current(), '/admin/sub_categorys'))
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/Subcategory/edit/{{$get->id}}" enctype="multipart/form-data">                      

                    @else
                    <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/GEL/edit/{{$get->id}}" enctype="multipart/form-data">
                @endif 
                    @csrf

                    <input type="hidden" value="{{$get->group}}" name="group" required>
                    <input type="hidden" value="1" name="user_id" required>

                    @foreach($edit_admin as $url=>$path)
                      @if(str_contains(url()->current(), '/admin/'.$url.''))
                        @Include('themes.admin.default._Include._edit.'.$path.'')
                      @endif
                    @endforeach

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary b-up b-3d">{{ __('AA.Update')}}</button></form>
                <button type="button" class="btn btn-secondary b-up b-3d" data-dismiss="modal">{{ __('AA.Close')}}</button>
            </div>
        </div>
    </div>
</div>