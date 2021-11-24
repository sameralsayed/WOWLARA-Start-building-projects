<?php

/* Simple configuration file for Laravel Sitemap package */
return [
    'use_cache' => env('SITEMAP_CACHE'),
    'cache_key' => 'laravel-sitemap.'.config('app.url'),
    'cache_duration' => 3600,
    'escaping' => true,
    'use_limit_size' => false,
    'max_size' => env('SITEMAP_MAX'),
    'use_styles' => false,
    'styles_location' => '/vendor/sitemap/styles/',
    'use_gzip' => env('SITEMAP_GZIP')
];
