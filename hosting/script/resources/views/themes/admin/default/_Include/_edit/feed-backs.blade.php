<table class="table hover multiple-select-row data-table-export nowrap">
  <thead>
    <tr>
      <th>{{ __('AA.Message')}}</th>
      <th>{{ __('AA.By')}}</th>
      <th>{{ __('AA.Added')}}</th>    
      <th>{{ __('AA.Actions')}}</th> 
    </tr>
  </thead>
    <tbody>
      @foreach($generals as $get) 
          @if($get->local==$lang->language) 
              @if($get->group=='feed-baks')
              <tr>
                <td>{!!$get->content!!}</td> 
                @if($get->user_id)              
                  <td {!!$tooltip!!}"{{__('AA.User who sent this message')}}">{{$get->user->username}}</td>
                  @else
                  <td {!!$tooltip!!}"{{__('AA.A guest sent this message')}}">{{$get->name}}</td>
                @endif
                <td {!!$tooltip!!}"{{__('AA.Added date')}}">{{$get->created_at->ago()}}</td> 
                <td class="btn" {!!$tooltip!!}"{{__('AA.Delete This')}}"> <a href="/admin/GEL/delete/{{$get->id}}"
                onclick="return confirm('{{ __('AA.You Sure')}}')"><i class="dw dw-delete-3"></i> {{ __('AA.Delete')}}</td>       
              </tr>
              @endif
          @endif 
      @endforeach 
    </tbody>
</table>