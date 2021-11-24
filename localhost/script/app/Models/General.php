<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class General extends Eloquent  {


    protected $table = 'general';
    
    protected $fillable = [
            'local',  
            'group', 
            'views', 
            'status', 
            'user_id',  
            'adult',

            'ads_name', 
            'ads_title', 
            'ads_description',  
            'ads_sponsored', 
            'ads_start_date', 
            'ads_end_date', 
            'ads_link',  

            'user_age', 
            'user_gender', 

            'noti_cookies_name', 
            'noti_title',  
            'noti_link', 
            'noti_message', 
            'noti_start_date', 
            'noti_end_date',  
            'noti_seconds', 
            'noti_color', 
            'noti_background_color', 
            'noti_position',  
            'noti_icon',         
            'noti_user', 
            'noti_guest', 

            'code_name',  
            'code_type', 
            'code_code', 

            'faq_question', 
            'faq_answer', 

            'analytic_name', 
            'analytic_code', 

            'design_color',

            'page_name',  
            'page_content', 
            'page_seo_title', 
            'page_seo_keywords', 
            'page_seo_description', 

            'help_title', 
            'help_content', 

            'login_name', 
            'login_client_id',  
            'login_client_secret', 

            'social_link_name', 
            'social_link_icon', 
            'social_link_link', 

            'theme_name', 
            'theme_version', 
            'theme_auther', 
            'theme_to',  
            'theme_description', 
            'theme_image',                      

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


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

}