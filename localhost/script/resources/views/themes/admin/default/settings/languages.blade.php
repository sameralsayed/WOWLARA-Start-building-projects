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
            <th>{{ __('AA.Translations')}}</th>
            <th>{{ __('AA.Added')}}</th>
            <th>{{ __('AA.Update')}}</th>     
            <th>{{ __('AA.Status')}}</th>
            <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
          </tr>
        </thead>
          <tbody>
            @foreach($langs as $lang)
              @Include('themes.admin.default._Include._edit')
              @Include('themes.admin.default._Include._delete') 
              <tr>
                @Include('themes.admin.default._Include._tbody')
                <td {!!$tooltip!!}"{{__('AA.Edit Translations')}}"><a href="{{(env('APP_URL'))}}/admin/languages/manage/{{$lang->language}}/translations" target="_blank">{{__('AA.Click to edit')}}</a></td>          
                <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$lang->created_at->ago()}}</td>
                <td {!!$tooltip!!}"{{__('AA.Date of last update')}}">{{$lang->updated_at->ago()}}</td>
                <td>
                  @if($lang->status=='Active')
                    <span {!!$tooltip!!}"{{__('AA.Now Active')}}" class="badge badge-pill" data-bgcolor="#28a745" data-color="#fff">{{ __('AA.'.$lang->status.'')}}</span>
                  @else
                    <span {!!$tooltip!!}"{{__('AA.Now lang')}}" class="badge badge-pill" data-bgcolor="#ff2237" data-color="#fff">{{ __('AA.'.$lang->status.'')}}</span>
                  @endif
                </td>
                <td {!!$tooltip!!}"{{__('AA.Edit & Delete')}}">@Include('themes.admin.default._Include._actions')</td>
              </tr>
            @endforeach 
          </tbody>
      </table>

    </div>   
</div>
@endsection