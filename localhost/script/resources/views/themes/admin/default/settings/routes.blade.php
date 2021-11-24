@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._add')
@Include('themes.admin.default._Include._title')
  @if(str_contains(url()->current(), '/admin/to_routes'))
        @Include('themes.admin.default._Include._routes.pages-routes')
    @elseif(str_contains(url()->current(), '/admin/routes'))
        @Include('themes.admin.default._Include._routes.complete')
    @else
  @endif
@endsection