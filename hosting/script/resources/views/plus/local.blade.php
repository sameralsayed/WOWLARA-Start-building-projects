@if(!Auth::guest()){{ Auth::user()->local }}@else{{app()->getLocale()}}@endif