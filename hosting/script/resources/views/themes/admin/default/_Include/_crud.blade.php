<div class="modal fade bs-example-modal-lg" id="CRUD-add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myLargeModalLabel">{{ __('AA.New') }}</h4>     

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <div class="modal-body">
        <form role="form" method="post" action="{{ route('crud-add') }}" enctype="multipart/form-data">
             @csrf
             {!!$file_support!!}
             <!--{!!$user_id_support!!}-->
             {!!$select_sql_optn!!}
             <input type="hidden" class="form-control" value="{{$rout}}"  name="route" >

	         <div class="form-group"> 
		         <label>{{ __('AA.Name') }}</label>
		         <input class="form-control" type="text" name="name" placeholder="Johnny Brown">
	         </div>
   
	         <div class="form-group">
		         <label>{{ __('AA.Default') }}</label>
		         <input class="form-control" type="text" name="default" placeholder="default">
	         </div>

            <div class="modal-footer">
                <button type="submit" onclick="Alert.success()" class="btn btn-primary b-up b-3d">{{ __('AA.Add')}}</button></form>
                <button type="button" class="btn btn-secondary b-up b-3d" data-dismiss="modal">{{ __('AA.Close')}}</button>
            </div>

            </div>
        </div>
    </div>
</div>