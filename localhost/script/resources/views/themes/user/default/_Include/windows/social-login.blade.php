<div class="modal left fade" style="display: none;" id="s-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> {{ __('AA.Login with')}}</h4>
        </div>
        <div class="modal-body texc">
 
          <div class="row modal-500">
          @foreach($social_logins as $login=>$c)
            @if (env(''.$login.'_status')=="Active")
            <div class="col-md-4 col-lg-4 col-sm-12">
              <a href="{{ url('auth/'.$login.'') }}">
                <button style="width: 100%;margin-bottom: 5px;" class="btn btn-outline-primary">{{$login}}</button>
              </a>
            </div>
            @endif
          @endforeach
          </div>
          
        </div>

      </div>
    </div>
</div>