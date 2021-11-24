<hr>
<button data-toggle="modal" data-target="#Medium-modal" type="submit" style="width: 100%" class="btn btn-primary b-up b-3d">{{ __('AA.New Plan')}}</button>
<hr>
@if(Auth::user()->role=="Admin" || Auth::user()->role=="Writer")
<!-- add new -->
<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <form role="form" method="post" action="{{(env('APP_URL'))}}/admin/add/plan" enctype="multipart/form-data">
      @csrf
        @foreach($form_plan as $name)
        <div class="form-group">
          <label>{{ __('AA.'.$name.'')}}</label>
          <input class="form-control" type="text" name="{{$name}}" placeholder="{{$name}}">
        </div>
        @endforeach
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">{{ __('AA.Add')}}</button></form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('AA.Close')}}</button>    
      </div>
    </div>
  </div>
</div>
<!-- end add new -->
@endif
<table class="table hover multiple-select-row data-table-export nowrap">
  <thead>
    <tr>
      @foreach($form_plan as $name)
      <th>{{ __('AA.'.$name.'')}}</th>
      @endforeach
      <th>{{ __('AA.Subscribers')}}</th>     
      <th>{{ __('AA.Added')}}</th>
      <th>{{ __('AA.Update')}}</th>     
      <th class="datatable-nosort">{{ __('AA.Actions')}}</th>
    </tr>
  </thead>
    <tbody>
      @foreach($get_plans as $plan)
        <tr>
          <td>{{$plan->name}}</td>  
          <td>{{$plan->month}}</td>
          <td>{{$plan->year}}</td>
          <td>{{$plan->limit}}</td>
          <td>{{$plan->payments->count()}}</td>          
          <td>{{$plan->created_at->ago()}}</td>
          <td>{{$plan->updated_at->ago()}}</td>
          <td>@if(Auth::user()->role=="Admin")<button type="button" class="btn btn-danger b-up b-3donclick b-3d=" onclick="location.href='/plan/delete/{{$plan->id}}';"><i class="icon-copy fa fa-trash" aria-hidden="true"></i></button>@endif</td>
        </tr>
      @endforeach 
    </tbody>
</table>