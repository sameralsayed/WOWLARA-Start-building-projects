<script type="text/javascript">Dropzone.options.myAwesomeDropzone = {paramName: "file",maxFilesize:<?php echo $get->maxFilesize;?>,maxFiles: <?php echo $get->maxFiles;?>,addRemoveLinks: true,timeout: 9000,forceChunking:<?php echo $get->forceChunking;?>,retryChunks:<?php echo $get->retryChunks;?>,retryChunksLimit:<?php echo $get->retryChunksLimit;?>,capture: null,renameFile: true,renameFile: function(file) {var dt = new Date();var time = dt.getTime();return time+file.name;},};
</script>

<!-------------------------------js-->
@foreach($generals as $code)
    @if($code->group=="custom_codes")
        @if($code->status=="Active")
            @if( Config::get('app.locale')==$code->local)
                @if($code->code_type=="js")
                    {!!$code->code_code!!}
                @endif
            @endif
        @endif
    @endif
@endforeach
<!-------------------------------end js-->