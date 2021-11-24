@if(str_contains(url()->current(), '/admin/siteicons'))
<form role="form" method="post" action="{{(env('APP_URL'))}}/admin/svg/edit/{{$lang->id}}" enctype="multipart/form-data">
@else
<form role="form" method="post" action="{{(env('APP_URL'))}}/admin/lang/edit/{{$lang->id}}" enctype="multipart/form-data"> 
    @endif
    @csrf
    @foreach($edit_by_lang_admin as $names=>$name)
        @if(str_contains(url()->current(), '/admin/'.$names.''))
        @Include('themes.admin.default._Include._edit.'.$names.'')
        @endif
    @endforeach
    @if(str_contains(url()->current(), '/admin/feed-backs'))

    @else
    <button style="width: 100%;margin-top:20px" type="submit" class="btn btn-primary">{{ __('AA.Update')}}</button>
    @endif
</form>