<?php
 
namespace App\Http\Middleware;
 
use Closure; 
use Session;
use App;
use Config;
 
class SetLang

{
    public function handle($request, Closure $next)
    {
        if (Session::has("lang")) {
            $lang = Session::get("lang");
        } else {
            $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
 
            if ($lang != 'en'    
            && $lang != 'ar'            
         ) {
                $lang = 'en';
            }
        }
 
        App::setLocale($lang);
        return $next($request);
    }
}