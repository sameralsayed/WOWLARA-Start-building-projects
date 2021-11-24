<!DOCTYPE html>
  @foreach($langs as $lang)
    @if( Config::get('app.locale')==$lang->language)
      @if($lang->rtl=="Yes")
        <html @if($lang->rtl=="Yes") dir="rtl" @endif lang="{{app()->getLocale()}}">
      @endif
    @endif
  @endforeach 
  <head>
  <meta charset="utf-8">
  <title>{{$admin_title}}</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font --> 
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/css/fx.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/css/core.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/css/samcss.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/css/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/switchery/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="{{(env('APP_URL'))}}/themes/admin/default/plugins/dropzone/src/dropzone.css">


  @Include('themes.admin.default._Include.css')
  @toastr_css
  </head>

  <body>
    
    @Include('themes.admin.default._Include.header')
    <div class="main-container">
      @yield('content')
    </div>

      <div class="footer-wrap pd-20 mb-20 card-box">
        {{(env('APP_NAME'))}} - {{ __('AA.Made by')}} <a href="https://www.wowlara.tech" target="_blank">WOWLARA - V 0.0.1</a>
      </div>

  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/core.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/script.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/process.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/layout-settings.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/dataTables.responsive.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/dataTables.buttons.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/buttons.print.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/buttons.html5.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/buttons.flash.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/pdfmake.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/datatables/js/vfs_fonts.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/datatable-setting.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/switchery/switchery.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/js/advanced-components.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/highcharts-6.0.7/code/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/admin/default/plugins/dropzone/src/dropzone.js"></script>
  @Include('themes.admin.default._Include.charts')
  @Include('themes.admin.default._Include.js')
  @toastr_js
  @toastr_render

<script type="text/javascript">Dropzone.options.myAwesomeDropzone = {paramName: "file",maxFilesize:<?php echo $get->maxFilesize;?>,maxFiles: <?php echo $get->maxFiles;?>,addRemoveLinks: true,timeout: 9000,forceChunking:<?php echo $get->forceChunking;?>,retryChunks:<?php echo $get->retryChunks;?>,retryChunksLimit:<?php echo $get->retryChunksLimit;?>,capture: null,renameFile: true,renameFile: function(file) {var dt = new Date();var time = dt.getTime();return time+file.name;},};
</script>
  
  </body>
</html>