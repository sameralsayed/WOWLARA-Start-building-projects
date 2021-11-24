@extends('themes.admin.default.index') 
@section('content') 
@Include('themes.admin.default._Include._add')
@Include('themes.admin.default._Include._title')
<div class="card-box mb-30"><br>
    <div class="pb-20">

<table class="table hover multiple-select-row data-table-export nowrap">
  <thead>
    <tr>
      @Include('themes.admin.default._Include._thead')
      <th>{{ __('AA.Added')}}</th>
      <th>{{ __('AA.Update')}}</th>     
      <th>{{ __('AA.Status')}}</th>
      <th>{{ __('AA.GEO')}}</th>
      <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
    </tr>
  </thead> 
    <tbody>
      
      @foreach($table_users as $get)
              @Include('themes.admin.default._Include._edit')
              @Include('themes.admin.default._Include._delete') 
              @Include('themes.admin.default._Include._geo')
              <tr>
                @Include('themes.admin.default._Include._tbody')
                <td {!!$tooltip!!}"{{__('AA.Added date')}}" >{{$get->created_at->ago()}}</td>
                <td {!!$tooltip!!}"{{__('AA.Date of last update')}}">{{$get->updated_at->ago()}}</td>
                <td>
                  @if($get->status=='Active')
                    <span {!!$tooltip!!}"{{__('AA.Now Active')}}" class="badge badge-pill" data-bgcolor="#28a745" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
                  @else
                    <span {!!$tooltip!!}"{{__('AA.Now Blocked')}}" class="badge badge-pill" data-bgcolor="#ff2237" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
                  @endif
                </td>
                <td><button data-toggle="modal" data-target="#geo-{{$get->id}}" type="button" class="btn btn-warning b-up b-3donclick b-3d="><i class="icon-copy dw dw-antenna"></i></button></td>
                <td {!!$tooltip!!}"{{__('AA.Edit & Delete')}}">@Include('themes.admin.default._Include._actions')</td>
              </tr>

      @endforeach 
    </tbody>
</table>


    </div>   
</div>
@endsection