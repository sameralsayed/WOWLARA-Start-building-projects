<div class="modal left fade" style="display: none;" id="loginpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> {{ __('AA.Login')}}</h4>
      </div>
      <div class="modal-body texc">
        @Include('themes.user.default._Include.windows.login')
      </div>
    </div>
  </div>
</div>