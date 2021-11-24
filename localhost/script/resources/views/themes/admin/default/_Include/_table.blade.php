<table class="table hover multiple-select-row data-table-export nowrap">
  <thead>
    <tr>
      @Include('themes.admin.default._Include._thead')
      <th>{{ __('AA.Added')}}</th>
      <th>{{ __('AA.Update')}}</th>     
      <th>{{ __('AA.Status')}}</th>
      <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
    </tr>
  </thead>
    <tbody>
      
      @foreach($generals as $get) 
          @if($get->local==$lang->language) 
              @if($get->group==$names)
                @Include('themes.admin.default._Include._edit')
                @Include('themes.admin.default._Include._delete')

              <tr>
                @Include('themes.admin.default._Include._tbody')
                <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$get->created_at->ago()}}</td>
                
                <td {!!$tooltip!!}"{{__('AA.Date of last update')}}">{{$get->updated_at->ago()}}</td>
                
                <td>
                  @if($get->status=='Active')
                    <span {!!$tooltip!!}"{{__('AA.Now Active')}}" class="badge badge-pill" data-bgcolor="#28a745" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
                  @else
                    <span {!!$tooltip!!}"{{__('AA.Now lang')}}" class="badge badge-pill" data-bgcolor="#ff2237" data-color="#fff">{{ __('AA.'.$get->status.'')}}</span>
                  @endif
                </td>

                <td {!!$tooltip!!}"{{__('AA.Edit & Delete')}}">@Include('themes.admin.default._Include._actions')</td>
              </tr>
              @endif
          @endif 
      @endforeach 
    </tbody>
</table>