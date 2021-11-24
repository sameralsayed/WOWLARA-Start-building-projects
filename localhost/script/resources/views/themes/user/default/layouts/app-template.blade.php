<!DOCTYPE html>
<html @if($get->rtl=="Yes") dir="rtl" @endif lang="{{app()->getLocale()}}" > 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <title>{{$get->site_name}} | @yield('title')</title>
  <meta http-equiv="refresh" content="{{$get->reload_page}}">
  <meta name="title" content="@yield('title')">
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
 

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{(env('APP_URL'))}}/site/{{$get->site_favicon}}">
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <style type="text/css">
    @Include('themes.user.default._Include.css._bootstrap')
    @Include('themes.user.default._Include.css._theme')
    @Include('themes.user.default._Include.css._custom')
    @Include('themes.user.default._Include.css._loader')
  </style>
  @toastr_css


  <link rel="stylesheet" href="{{(env('APP_URL'))}}/themes/user/default/css/icon-font.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/user/default/js/jquery-2.1.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  @Include('themes.user.default._Include.top')
</head>
<body>
  @if($get->maintenances_title)
      @Include('themes.user.default._Include.maintenances')
    @else
    @Include('themes.user.default._Include.navbar')
    @Include('themes.user.default._help.contact')
    @Include('themes.user.default._help.feed-back')
    @Include('themes.user.default._Include.windows.language')
    @Include('themes.user.default._Include.windows.login-window') 
    @Include('themes.user.default._Include._notification.top')
    @Include('themes.user.default._Include._notification.window')
 
    @yield('content')
 

    @yield('footer')
  
    @Include('themes.user.default._Include.footer')
    @Include('themes.user.default._Include._notification.down')
  @endif

  <script src="{{(env('APP_URL'))}}/themes/user/default/js/core.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/user/default/js/script.min.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/user/default/js/process.js"></script>
  <script src="{{(env('APP_URL'))}}/themes/user/default/js/layout-settings.js"></script> 
  @Include('themes.user.default._Include.footer')
  @toastr_js
  @toastr_render
  
</body>
</html>