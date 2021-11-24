<!DOCTYPE html>
<html @if($get->rtl=="Yes") dir="rtl" @endif lang="{{app()->getLocale()}}" > 
    <head>
        <meta charset="utf-8">
        <title>{{$get->site_name}} | {{ Auth::user()->name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{(env('APP_URL'))}}/themes/user/default/css/icon-font.min.css">
        <style type="text/css">
        {!!$hidden_sidepar!!}
        @Include('themes.user.default._Include.css._bootstrap')
        @Include('themes.user.default._Include.css._theme')
        @Include('themes.user.default._Include.css._custom')    
    </style>
        <!-- Styles -->
        <link rel="stylesheet" href="{{(env('APP_URL'))}}/themes/user/default/css/app.css">
        @livewireStyles
        <!-- Scripts -->
        <script src="{{(env('APP_URL'))}}/themes/user/default/js/app.js" defer></script>
    </head>
    @if($get->maintenances_title)
      @Include('themes.user.default._Include.maintenances')
    @else
    <body class="font-sans antialiased sidebar-light header-light">
        @Include('themes.user.default._Include._notification.top')
        @Include('themes.user.default._Include._notification.window')
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100">
            @Include('themes.user.default._Include.navbar')
            <!-- Page Heading -->
            <header  class="bg-white shadow">
                <div  class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @yield('footer')
     
        @Include('themes.user.default._Include.footer')
        @Include('themes.user.default._Include._notification.down')

        @stack('modals')
        @livewireScripts
        <script src="{{(env('APP_URL'))}}/themes/user/default/js/core.js"></script>
        <script src="{{(env('APP_URL'))}}/themes/user/default/js/script.min.js"></script>       
    </body>
    @endif
</html>