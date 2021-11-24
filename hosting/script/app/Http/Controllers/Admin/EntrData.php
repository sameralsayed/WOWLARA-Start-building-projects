<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Route;
class EntrData extends Controller
{ 

// find admin
    //function __construct(){$this->middleware('admin');}

        // data enter -> routes 
        function enter_route() {
        $data = [
            ['user'=>'default', 'for'=>'Admin',  'admin'=>'default', 'name'=> 'documentation','icon'=>'<span class="micon dw dw-information"></span>', 'path'=> 'documentation', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'routes','icon'=>'<span class="micon dw dw-file"></span>', 'path'=> 'settings/routes', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'to_routes','icon'=>'<span class="micon dw dw-analytics-20"></span>', 'path'=> 'settings/routes', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'icons','icon'=>'<span class="micon dw dw-flag"></span>', 'path'=> 'icons', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'categorys','icon'=>'<span class="micon dw dw-header1"></span>', 'path'=> 'categorys', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'sub_categorys','icon'=>'<span class="micon dw dw-grid"></span>', 'path'=> 'sub-categorys', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'languages','icon'=>'<span class="micon dw dw-worldwide-1"></span>', 'path'=> 'settings/languages', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'users','icon'=>'<span class="micon dw dw-user-11"></span>', 'path'=> 'users', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'genders','icon'=>'<span class="micon dw dw-human-resources"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'themes','icon'=>'<span class="micon dw dw-polaroids"></span>', 'path'=> 'settings/themes', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'designs','icon'=>'<span class="micon dw dw-paint-palette"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'siteicons','icon'=>'<span class="micon dw dw-image"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'ages','icon'=>'<span class="micon dw dw-agenda1"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'faqs','icon'=>'<span class="micon dw dw-exchange"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'notifications','icon'=>'<span class="micon dw dw-notification"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'pages','icon'=>'<span class="micon dw dw-page"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'analytics','icon'=>'<span class="micon dw dw-analytics-11"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'custom_codes','icon'=>'<span class="micon dw dw-coding"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'social_logins','icon'=>'<span class="micon dw dw-login"></span>', 'path'=> 'settings/social-login', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'social_links','icon'=>'<span class="micon dw dw-link-2"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'mail','icon'=>'<span class="micon dw dw-email"></span>', 'path'=> 'settings/mail', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'ads','icon'=>'<span class="micon dw dw-money-1"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'site-settings','icon'=>'<span class="micon dw dw-settings2"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  
            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'help_page','icon'=>'<span class="micon dw dw-help"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'feedbacks','icon'=>'<span class="micon dw dw-shuffle1"></span>', 'path'=> 'settings/feedbaks', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'payments','icon'=>'<span class="micon dw dw-money-2"></span>', 'path'=> 'settings/payments', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''],  

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'verification','icon'=>'<span class="micon dw dw-name"></span>', 'path'=> 'settings/verification', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'latest_updates','icon'=>'<span class="micon dw dw-inbox-2"></span>', 'path'=> 'settings/general', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'storage','icon'=>'<span class="micon dw dw-analytics-13"></span>', 'path'=> 'settings/storage', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 

            ['user'=>'default', 'for'=>'Admin', 'admin'=>'default', 'name'=> 'sitemap','icon'=>'<span class="micon dw dw-broken-link"></span>', 'path'=> 'settings/sitemap', 'created_at'=>''. date("Y-m-d H:i") .'', 'updated_at'=>''. date("Y-m-d H:i") .''], 
        ];
        Route::insert($data); return back(); } // enter


}