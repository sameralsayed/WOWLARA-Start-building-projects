<hr>
<table class="table hover multiple-select-row data-table-export nowrap">
  <thead>
    <tr>
      <th>{{ __('AA.User')}}</th>     
      <th>{{ __('AA.Plan')}}</th>      
      <th>{{ __('AA.Added')}}</th>     
    </tr>
  </thead>
    <tbody>
      @foreach($get_pays as $pay)
        <tr>
          <td>@if($pay->user)<a href="/user/{{$pay->user->id}}/{{Config::get('app.locale')}}" target="_blank">{{$pay->user->username}}</a>@endif</td>
          <td>@if($pay->plan){{$pay->plan->name}}@endif</td>
          <td>{{$pay->created_at->ago()}}</td>
        </tr>
      @endforeach 
    </tbody>
</table>