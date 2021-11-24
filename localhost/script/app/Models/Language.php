<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
use DB;

class Language extends Eloquent  {

    protected $table = 'languages';

    protected $fillable = [
            'name',  
            'language',    
            'status',                      
            'rtl', 
            'user_id',

            'site_name',  
            'site_logo',    
            'site_favicon',
            'title',
            'description',  
            'keywords',    
            'font',  
            'loading',                     
            'style', 
            'load_style', 
            'reload_page',    
            'blocked_user',                      
            'terms_of_service', 
            'privacy_policy',
            'GDPR',  
            'DMCA',

            'login',
            'can_login',
            'can_register',
            'my_feedBacks',
            'verification',
            'two_factor',
            'delete_account',
            'design',
            'sidepar',
            
            'maxFilesize',    
            'maxFiles',                      
            'retryChunksLimit', 
            'forceChunking',
            'retryChunks',  

            'theme_admin',                      
            'theme_user', 
            'maintenances_title',    
            'maintenances_message',                      
            'maintenances_opens', 

            'cookies_name',
            'cookies_title',  
            'cookies_message',

            'comments_facebook',                      
            'comments_disqus',

            'contact_mail',
            'contact_noti', 

            'company_address',    
            'company_email',                      
            'company_phone', 
            'company_zip_code',
            'company_city',  
            'company_state',    
            'company_country',                      
            'company_registration', 
            'company_tax_number',
            'company_about',  
            'company_noti',    
            'company_copyright',

            'error_400', 
            'error_403',
            'error_404',  
            'error_500',    
            'error_503',  

            'not_found_title',                      
            'not_found_description', 
            'not_found_icon',

            'advertise_mail',  
            'advertise_price',    
            'advertise_title',                      
            'advertise_message', 

            'login_title',
            'login_description',  
            'login_keywords',    
            'login_image',  

            'register_title', 
            'register_description',
            'register_keywords',  
            'register_image',                

            'crawler_Bot', 

            'isChrome',
            'isFirefox',  
            'isOpera',    
            'isSafari',                      
            'isIE', 
            'isEdge',  
            'isInApp',  

            'isDesktop',                      
            'isMobile', 
            'isTablet',

            'isWindows',                      
            'isLinux', 
            'isMac',
            'isAndroid'  
            
            
    ];

}