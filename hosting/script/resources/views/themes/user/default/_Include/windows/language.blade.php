<div class="modal left fade" style="display: none;" id="language" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ __('AA.Language') }}</h4>
      </div>
      <div class="modal-body texc">
        <div class="row modal-500">
          @foreach($langs as $lang)
            <div class="col-md-12 col-lg-12 col-sm-12">
              <a style="width: 100%;margin-bottom:10px" href="{{ route('change_lang', ['lang' => ''.$lang->language.'']) }}" class="btn btn-outline-primary">{{$lang->name}}</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>