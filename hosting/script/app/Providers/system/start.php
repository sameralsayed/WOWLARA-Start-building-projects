<?php 
use App\Models\General;
use App\Models\Language;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Verify;
use App\Models\Route;
use App\Models\Crud;
use App\Models\PageRoute;
use App\Models\Plan;
use App\Models\Payment;
use Rainwater\Active\Active;
use Victorybiz\GeoIPLocation\GeoIPLocation;
use App\Models\IconSvg;

/*
    System : WOWLARA
    Created by : SAMER SAEID
    Copyright : SAMER SAEID
    URL: https://www.facebook.com/samerthehariri/
*/


//----------------------- database

        $crawlers = [ 
            'Bot'=>'Crawler / Bot',
            ];               
        View::share('crawlers',$crawlers);

        $URL = '';
        View::share('URL',$URL);

        $get_verifys = Verify::latest()->get();
        View::share('get_verifys',$get_verifys);

        $get_plans = Plan::latest()->get();
        View::share('get_plans',$get_plans);

        $get_svgs = IconSvg::latest()->get();
        View::share('get_svgs',$get_svgs);

        $get_pays = Payment::latest()->get();
        View::share('get_pays',$get_pays);

        $get_categorys = Category::latest()->get();
        View::share('get_categorys',$get_categorys);

        $get_sub_categorys = SubCategory::latest()->get();
        View::share('get_sub_categorys',$get_sub_categorys);

        $table_users = User::latest()->get();
        View::share('table_users',$table_users);

        $generals = General::latest()->get();
        View::share('generals',$generals);

        $cruds = Crud::latest()->get();
        View::share('cruds',$cruds);

        $langs = Language::latest()->get();
        View::share('langs',$langs);

        $get_routes = Route::latest()->get();
        View::share('get_routes',$get_routes);
        
        $pages_routes = PageRoute::latest()->get();
        View::share('pages_routes',$pages_routes);
//----------------------- end database


//-----------------------admin routes [name - file path]
        $start_admin = [ 
            'icons'=>'icons',
            'categorys'=>'categorys',
            'sub_categorys'=>'sub-categorys', 
            'languages'=>'settings/languages',
            'users'=>'users',
            'genders'=>'settings/general',
            'themes'=>'settings/themes',
            'designs'=>'settings/general',
            'siteicons'=>'settings/general',            
            'ages'=>'settings/general',
            'faqs'=>'settings/general',
            'notification'=>'settings/general', 
            'pages'=>'settings/general',
            'analytics'=>'settings/general',
            'custom_codes'=>'settings/general',
            'social_login'=>'settings/general',
            'social_link'=>'settings/general',
            'mail'=>'settings/general',
            'ads'=>'settings/general',
            'storage'=>'settings/storage',
            'site-settings'=>'settings/general',  
            'help_page'=>'settings/general',  
        ];
        View::share('start_admin',$start_admin);
//-----------------------end admin routes [name - file path]


//-----------------------route user edit & update
        $route_user_edit = [ 
            'user/edit'=>'user_edit',
            'update/lang'=>'update_lang',
            'update/design'=>'update_design', 
            'update/verified'=>'update_verified',                
        ];
        View::share('route_user_edit',$route_user_edit);
//-----------------------end route user edit & update


//-----------------------route user edit & update
        $admin_bic = [ 
            'login/edit'=>'login_edit',
            'mail/edit'=>'mail_edit',
            'storage/edit'=>'storage_edit', 
            'pay/edit'=>'pay_edit',
            'sitemap/edit'=>'sitemap_edit',            
        ];
        View::share('admin_bic',$admin_bic);
//-----------------------end route user edit & update

//-----------------------admin panel
        $admin_panel = [  
            'table_users',
            'get_verifys',
            'langs',
            'get_categorys',             
            'get_sub_categorys',                                 
            ];                
        View::share('admin_panel',$admin_panel);
//---------------------- end admin panel

//-----------------------admin form sitemap
        $form_sitemap = [  
            'SITEMAP_changefreq',
            'SITEMAP_priority',
            'SITEMAP_MAX',
            //'SITEMAP_GZIP',             
            //'SITEMAP_CACHE',                                 
            ];                
        View::share('form_sitemap',$form_sitemap);
//---------------------- end admin form sitemap


//-----------------------admin js code uploads
        $js_admin_upload = [  
            'image',
            'logo',
            'favicon',
            'login',
            'register',
            'edit',               
            //icons
            //'icon_facebook'=>'icons',                                
            ];                
        View::share('js_admin_upload',$js_admin_upload);
//---------------------- end-admin js code uploads


//-----------------------admin js code uploads
        $docum = [  
            'Data',
            'Add',
            'Edit',
            'Delete',
            'status', 
            'Category',
            'Sub_Category', 
            'ads',
            'Permissions', 
            'Share',
            'Save', 
            'Like',
            'Report', 
            'Download',
            'Comment',  
            ];                
        View::share('docum',$docum);
//---------------------- end-admin js code uploads


//---------------------- share links
        $sharelinks = [ 
         'https://www.facebook.com/sharer/sharer.php?u=' =>'facebook',
         'https://twitter.com/intent/tweet?text=&url=' =>'twitter',
         'https://pinterest.com/pin/create/button/?url=' =>'pinterest',
         'http://www.linkedin.com/shareArticle?mini=true&url=' =>'linkedin',
         'http://reddit.com/submit?url=' =>'reddit',
         'https://wa.me/?text=' =>'whatsapp',
         'https://t.me/share/url?url=' =>'telegram',    
        ];
        View::share('sharelinks',$sharelinks); 
//---------------------- end share links


//----------------------------------------------select mail system
        $mail_optn = [ 
            'smtp',              
            ];               
        View::share('mail_optn',$mail_optn);

    $select_mail_optn = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Select System').' '.(env('MAIL_MAILER')).'</leble>
    <select class="custom-select2 form-control" name="MAILER" style="width: 100%; height: 38px;">';

        foreach($mail_optn as $mail){
            $select_mail_optn.='<option value="'.$mail.'">'.$mail.'</option>';
        }
 
    $select_mail_optn.='</select></div>';
 
    View::share('select_mail_optn',$select_mail_optn);


//----------------------------------------------end select mail system



        $site_full = [ 
            'APP_NAME'=>'APP NAME', 
            'APP_URL'=>'URL', 
            'RECAPTCHA_SITE_KEY'=>'RECAPTCHA KEY',
            'RECAPTCHA_SECRET_KEY'=>'RECAPTCHA SECRET KEY',                                      
            ];               
        View::share('site_full',$site_full);

//---------------------------------------------- storage system
        $storage_optn = [ 
            's3',              
            ];               
        View::share('storage_optn',$storage_optn);


        $pay_optn = [ 
            'Paypal',
            'Stripe',                       
            ];               
        View::share('pay_optn',$pay_optn);

    $select_storage_optn = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Select System').' '.(env('storage_system')).'</leble>
    <select class="custom-select2 form-control" name="storage_system" style="width: 100%; height: 38px;"><option value="local">local</option>';

        foreach($storage_optn as $stor){
            $select_storage_optn.='<option value="'.$stor.'">'.$stor.'</option>';
        }
 
    $select_storage_optn.='</select></div>';
 
    View::share('select_storage_optn',$select_storage_optn);

//----------------------------------------------end  storage system


//----------------------------------------------profile list
        $prof_list = [ 
            'my_feedBacks'=>'search',
            'verification'=>'calendar-2',
            'profile_information'=>'information',
            'update_password'=>'key3',
            'two_factor'=>'lock',
            'browser_sessions'=>'ecology', 
            'delete_account'=>'trash',
            //'design'=>'slideshow',
        ];
        View::share('prof_list',$prof_list);


        $for_help = [ 
            'terms_of_service'=>'Terms of Service',   
            'privacy_policy'=>'Privacy Policy',
            'GDPR'=>'GDPR',
            'DMCA'=>'DMCA',
        ];
        View::share('for_help',$for_help);


        $comp_help = [ 
            'company_address'=>'Address',
            'company_email'=>'Email',
            'company_phone'=>'Phone',
            'company_zip_code'=>'Zip Code',
            'company_city'=>'City',
            'company_state'=>'State',
            'company_country'=>'Country',
            'company_company_registration'=>'Registration',   
            'company_tax_number'=>'Tax Number',   
            'company_copyright'=>'Copyright',   
            'company_contact_text'=>'Contact',   
            'company_noti'=>'Noti',   
            'company_about'=>'About',   
        ];
        View::share('comp_help',$comp_help);

//----------------------------------------------end profile list
        $sql_optn = [ 
            'bigIncrements',
            'bigInteger',
            'binary',
            'boolean',
            'char',
            'dateTimeTz',
            'dateTime',
            'date',
            'decimal',
            'double',
            'enum',
            'float',
            'foreignId',
            'geometryCollection',
            'geometry',
            'id',
            'increments',
            'integer',
            'ipAddress',
            'json',
            'jsonb',
            'lineString',
            'longText',
            'macAddress',
            'mediumIncrements',
            'mediumInteger',
            'mediumText',
            'morphs',
            'multiLineString',
            'multiPoint',
            'multiPolygon',
            'nullableMorphs',
            'nullableTimestamps',
            'nullableUuidMorphs',
            'point',
            'polygon',
            'rememberToken',
            'set',
            'smallIncrements',
            'smallInteger',
            'softDeletesTz',
            'softDeletes',
            'string',
            'text',
            'timeTz',
            'time',
            'timestampTz',
            'timestamp',
            'timestampsTz',
            'timestamps',
            'tinyIncrements',
            'tinyInteger',
            'unsignedBigInteger',
            'unsignedDecimal',
            'unsignedInteger',
            'unsignedMediumInteger',
            'unsignedSmallInteger',
            'unsignedTinyInteger',
            'uuidMorphs',
            'uuid',
            'year',
            ];               
        View::share('sql_optn',$sql_optn);

    $select_sql_optn = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Type').'</leble>
    <select class="custom-select2 form-control" name="type" style="width: 100%; height: 38px;">';

        foreach($sql_optn as $name){
            $select_sql_optn.='<option value="'.$name.'">'.$name.'</option>';
        }
 
    $select_sql_optn.='</select></div>';
 
    View::share('select_sql_optn',$select_sql_optn);

//----------------------------------------------end select option SQL

//---------------------------------------------- select user

    $select_users = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Type').'</leble>
    <select class="custom-select2 form-control" name="user_id" style="width: 100%; height: 38px;">';

        foreach($table_users as $user){
            $select_users.='<option value="'.$user->id.'">'.$user->username.'</option>';
        }
 
    $select_users.='</select></div>';
 
    View::share('select_users',$select_users);

//----------------------------------------------end select user


//----------------------------------------------select file support
    $file_support = '<div class="form-group"style="width:100%;"><leble>'.__('AA.File support').'</leble>
    <select class="custom-select2 form-control" name="file" style="width: 100%; height: 38px;"><option value="No">'.__('AA.No').'</option><option value="Yes">'.__('AA.Yes').'</option></select></div>';
    View::share('file_support',$file_support);
//----------------------------------------------end select file support

//----------------------------------------------select file support
    $user_id_support = '<div class="form-group"style="width:100%;"><leble>'.__('AA.user id support').'</leble>
    <select class="custom-select2 form-control" name="user_id" style="width: 100%; height: 38px;"><option value="No">'.__('AA.No').'</option><option value="Yes">'.__('AA.Yes').'</option></select></div>';
    View::share('user_id_support',$user_id_support);
//----------------------------------------------end select file support

//----------------------------------------------mail form 
        $mail_smtp = [ 
            'MAIL_HOST'=>'MAIL_HOST',    
            'MAIL_PORT'=>'MAIL_PORT',    
            'MAIL_ENCRYPTION'=>'MAIL_ENCRYPTION',     
            'MAIL_USERNAME'=>'MAIL_USERNAME',       
            'MAIL_PASSWORD'=>'MAIL_PASSWORD',
            'MAIL_FROM_ADDRESS'=>'MAIL_FROM_ADDRESS',   
            'MAIL_FROM_NAME'=>'MAIL_FROM_NAME', 
            ];               
        View::share('mail_smtp',$mail_smtp);
//----------------------------------------------end mail form 


//----------------------------------------------mail form 
        $storage_aws = [ 
            'AWS_ACCESS_KEY_ID'=>'AWS_ACCESS_KEY_ID',    
            'AWS_SECRET_ACCESS_KEY'=>'AWS_SECRET_ACCESS_KEY',    
            'AWS_DEFAULT_REGION'=>'AWS_DEFAULT_REGION',     
            'AWS_BUCKET'=>'AWS_BUCKET',       
            'AWS_URL'=>'AWS_URL',
            'AWS_ENDPOINT'=>'AWS_ENDPOINT',   
            ];               
        View::share('storage_aws',$storage_aws);
//----------------------------------------------end mail form 


//---------------------------------------------- pay paypal form
        $pay_paypal = [ 
            'PAYPAL_MODE'=>'PAYPAL_MODE',    
            'PAYPAL_SANDBOX_API_USERNAME'=>'PAYPAL_SANDBOX_API_USERNAME',    
            'PAYPAL_SANDBOX_API_PASSWORD'=>'PAYPAL_SANDBOX_API_PASSWORD',     
            'PAYPAL_SANDBOX_API_SECRET'=>'PAYPAL_SANDBOX_API_SECRET',       
            'PAYPAL_CURRENCY'=>'PAYPAL_CURRENCY',
            'PAYPAL_SANDBOX_API_CERTIFICATE'=>'PAYPAL_SANDBOX_API_CERTIFICATE',   
            ];               
        View::share('pay_paypal',$pay_paypal);
//----------------------------------------------end pay paypal form


//---------------------------------------------- pay paypal form
        $pay_stripe = [ 
            'STRIPE_KEY'=>'STRIPE_KEY',    
            'STRIPE_SECRET'=>'STRIPE_SECRET',      
            ];               
        View::share('pay_stripe',$pay_stripe);
//----------------------------------------------end pay paypal form

//----------------------------------------------select - this theme for 
        $theme_optn = [ 
            'Admin',   
            'User',            
            ];               
        View::share('theme_optn',$theme_optn);
//----------------------------------------------end select - this theme for 


//----------------------------------------------select - this theme for 
        $form_plan = [ 
            'name',          
            'month',   
            'year',   
            'limit',                        
            ];               
        View::share('form_plan',$form_plan);
//----------------------------------------------end select - this theme for 

//----------------------------------------------admin add & edit & delete
        $general_admin = [ 
            'GEL',
            ];         

        $lang_admin = [ 
            'lang',                
            ]; 

        $category_admin = [ 
            'category',                
            ]; 

        $subcategory_admin = [ 
            'Subcategory',                
            ]; 

        $routeCard_admin = [ 
            'route',
            'page_route',
            'crud',               
            ];  

        $plan_admin = [ 
            'plan',                
            ];         

//----------------------------------------------end routes add & edit & delete

//----------------------------------------------admin routes change status
        $plus_admin_status = [ 
            'GEL',   
            'lang', 
            'theme', 
            //'category', 
            //'Subcategory',  
            'user',              
            ];               
        View::share('plus_admin_status',$plus_admin_status);
//----------------------------------------------end admin routes change status

//----------------------------------------------get icon from database
        $icons = [    
            'not_found_icon',     
            ];               
        View::share('icons',$icons);
//----------------------------------------------end get icon from database

//----------------------------------------------name  Callback
        $social_logins = [              
            'facebook'=>'facebookCallback',
            'google'=>'googleCallback',
            'microsoft'=>'microsoftCallback',
            'apple'=>'appleCallback',
            'dailymotion'=>'dailymotionCallback',
            'deviantart'=>'deviantartCallback',
            'dribbble'=>'dribbbleCallback',
            'flattr'=>'flattrCallback',
            'flickr'=>'flickrCallback',
            'foursquare'=>'foursquareCallback',
            'github'=>'githubCallback',
            'imgur'=>'imgurCallback',
            'instagram'=>'instagramCallback',
            'kakao'=>'kakaoCallback',
            'line'=>'lineCallback',
            'medium'=>'mediumCallback',
            'meetup'=>'meetupCallback',
            'azure'=>'azureCallback',
            'naver'=>'naverCallback',
            'odnoklassniki'=>'odnoklassnikiCallback',
            'pinterest'=>'pinterestCallback',
            'pixnet'=>'pixnetCallback',
            'pushbullet'=>'pushbulletCallback',
            'reddit'=>'redditCallback',
            'snapchat'=>'snapchatCallback',
            'stackexchange'=>'stackexchangeCallback',
            'tumblr'=>'tumblrCallback',
            'vimeo'=>'vimeoCallback',
            'vkontakte'=>'vkontakteCallback',
            'weibo'=>'weiboCallback',
            'wordpress'=>'wordpressCallback',
            'yahoo'=>'yahooCallback',
            'yammer'=>'yammerCallback',
            'yandex'=>'yandexCallback',
            'youtube'=>'youtubeCallback',
            'battlenet'=>'battlenetCallback',
            'discord'=>'discordCallback',
            'smashcast'=>'smashcastCallback',
            'steam'=>'steamCallback',
            'twitch'=>'twitchCallback',
            'coursera'=>'courseraCallback',
            'goodreads'=>'goodreadsCallback',
            'headhunter'=>'headhunterCallback',
            'stocktwits'=>'stocktwitsCallback',
            'xing'=>'xingCallback',
            'asana'=>'asanaCallback',
            'aweber'=>'aweberCallback',
            'bitly'=>'bitlyCallback',
            'bitbucket'=>'bitbucketCallback',
            'box'=>'boxCallback',
            'cheddar'=>'cheddarCallback',
            'constantcontact'=>'constantcontactCallback',
            'digitalocean'=>'digitaloceanCallback',
            'disqus'=>'disqusCallback',
            'dropbox'=>'dropboxCallback',
            'envato'=>'envatoCallback',
            'etsy'=>'etsyCallback',
            'eventbrite'=>'eventbriteCallback',
            'eyeem'=>'eyeemCallback',
            'harvest'=>'harvestCallback',
            'heroku'=>'herokuCallback',
            'hubspot'=>'hubspotCallback',
            'linkedin'=>'linkedinCallback',
            'mailchimp'=>'mailchimpCallback',
            'mailru'=>'mailruCallback',
            'mattermost'=>'mattermostCallback',
            'podio'=>'podioCallback',
            'quickbooks'=>'quickbooksCallback',
            'readability'=>'readabilityCallback',
            'SalesForce'=>'SalesForceCallback',
            'sharepoint'=>'sharepointCallback',
            'shopify'=>'shopifyCallback',
            'teamleader'=>'teamleaderCallback',
            'teamweek'=>'teamweekCallback',
            'trello'=>'trelloCallback',
            'unsplash'=>'unsplashCallback',
            'versionone'=>'versiononeCallback',
            'whmcs'=>'whmcsCallback',
            'zendesk'=>'zendeskCallback',
            'zoho'=>'zohoCallback',
            'zoom'=>'zoomCallback',
            'uclapi'=>'uclapiCallback',
            'binance'=>'binanceCallback',
            'coinbase'=>'coinbaseCallback',
            'gumroad'=>'gumroadCallback',
            'mollie'=>'mollieCallback',
            'patreon'=>'patreonCallback',
            'paypal'=>'paypalCallback',
            'redbooth'=>'redboothCallback',
            'stripe'=>'stripeCallback',
            'venmo'=>'venmoCallback',
            'deezer'=>'deezerCallback',
            'discogs'=>'discogsCallback',
            'mixcloud'=>'mixcloudCallback',
            'soundcloud'=>'soundcloudCallback',
            'spotify'=>'spotifyCallback',
            'admitad'=>'admitadCallback',
            'angellist'=>'angellistCallback',
            'douban'=>'doubanCallback',
            'fablabs'=>'fablabsCallback',
            'fitbit'=>'fitbitCallback',
            'flexkids'=>'flexkidsCallback',
            'strava'=>'stravaCallback',
            'trakt'=>'traktCallback',
            'tvshowtime'=>'tvshowtimeCallback',
            'uber'=>'uberCallback', 
            ];               
        View::share('social_logins',$social_logins);
//----------------------------------------------end name  Callback



//----------------------------------------------admin add new  [ route  title]
        $add_admin = [ 
            'languages'=>'language', 
            'categorys'=>'Category',
            'sub_categorys'=>'Sub Category',    
            'users'=>'User',
            'genders'=>'Gender', 
            'ages'=>'Age',
            'faqs'=>'Faq',  
            'themes'=>'Theme',         
            'designs'=>'Design',       
            'notifications'=>'Notification',
            'pages'=>'Page',
            'analytics'=>'Analytic',
            'custom_codes'=>'Code',
            'social_links'=>'Social Link',
            'ads'=>'Ad',  
            'help_page'=>'Help Page', 
            'social_login'=>'Login',  
            'routes'=>'Route',  
            'siteicons'=>'icon',
            'latest_updates'=>'update',

            ];               
        View::share('add_admin',$add_admin);
//----------------------------------------------end admin add new  [ route  title]


//----------------------------------------------admin edit  [ route  title]
        $edit_admin = [           
            'photos'=>'photos',
            'categorys'=>'categorys',
            'sub_categorys'=>'sub-categorys',  
            'languages'=>'languages',         
            'users'=>'users',
            'genders'=>'genders',
            'themes'=>'themes',
            'designs'=>'designs',            
            'ages'=>'ages',
            'faqs'=>'faqs',
            //'widgets'=>'widgets',
            //'tools'=>'tools',  
            'notifications'=>'notifications', 
            'pages'=>'pages',
            'analytics'=>'analytics',
            'custom_codes'=>'custom-codes',
            'social_links'=>'social-links',
            'ads'=>'ads-custom',
            'help_page'=>'help-page', 
            //'routes'=>'routes', 
            'to_routes'=>'routes-page',         
            ];               
        View::share('edit_admin',$edit_admin);
//----------------------------------------------end admin edit  [ route  title]


//----------------------------------------------admin edit by language [ route  title]
        $edit_by_lang_admin = [            
            'mail'=>'Mail',         
            'ads'=>'Ads',
            //'storage'=>'Storage',    
            'site-settings'=>'Site Settings',  
            'feed-backs'=>'Feed Backs',   
            'siteicons'=>'siteicons',      
            ];               
        View::share('edit_by_lang_admin',$edit_by_lang_admin);
//----------------------------------------------end admin edit by language [ route  title]



//----------------------------------------------tooltip code
      $tooltip = 'data-toggle="tooltip" title=';
       View::share('tooltip',$tooltip);
//----------------------------------------------end tooltip code


//---------------------------------------------select role

        $select_role_info = [ 
            'Admin'=>'He can control all the features',   
            'User'=>'He cannot enter the control panel',  
            'Editor'=>'Only he can add it', 
            'Writer'=>'Only he can adjust', 
            'Author'=>'Only he can add and modify',          
            ];               
        View::share('select_role_info',$select_role_info);


        $select_role = [ 
            'Admin',   
            'User',  
            'Editor', 
            'Writer', 
            'Author',          
            ];               
        View::share('select_role',$select_role);
    
    $for_select_role = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Select permission for this user').'</leble>
    <select class="custom-select2 form-control" name="role" style="width: 100%; height: 38px;">';

        foreach($select_role as $role){
            $for_select_role.='<option value="'.$role.'">'.__('AA.'.$role.'').'</option>';
        }
 
    $for_select_role.='</select></div>';
 
    View::share('for_select_role',$for_select_role);
//---------------------------------------------end select role



//---------------------------------------------select language
    $select_lang = '<div class="form-group"style="width:100%;"><leble>'.__('AA.For Language').'</leble>
    <select class="custom-select2 form-control" name="local" style="width: 100%; height: 38px;">';

        foreach($langs as $lang){
          if($lang->status=="Active")
            $select_lang.='<option value="'.$lang->language.'">'.$lang->name.'</option>';
        }
 
    $select_lang.='</select></div>';
 
    View::share('select_lang',$select_lang);
//---------------------------------------------end select language


    $select_sys_login = '<div class="form-group"style="width:100%;"><leble>'.__('AA.Select System').'</leble>
    <select class="custom-select2 form-control" name="login_name" style="width: 100%; height: 38px;">';

        foreach($social_logins as $name=>$no){
           
            $select_sys_login.='<option value="'.$name.'">'.$name.'</option>';
        }
 
    $select_sys_login.='</select></div>';
 
    View::share('select_sys_login',$select_sys_login);

//---------------------------------------------admin no add users
      $no_add_users = '<div class="row align-items-center">
                            <div class="col-md-4" style="text-align:center;">
                                <i style="font-size:100px" class="icon-copy dw dw-user-13"></i>
                            </div>
                            <div class="col-md-8">
                                <h4 class="font-20 weight-500 mb-10 text-capitalize">
                      <div class="weight-600 font-30 text-blue">'. __('AA.Sorry').'</div>
                                </h4>
                                <p class="font-18 max-width-600">'. __('AA.you cannot add a new user, the user must be completely new').'</p>
                            </div>
                        </div>';
       View::share('no_add_users',$no_add_users);
//---------------------------------------------end admin no add users


      $input_feedback_user = '<div class="form-group"><label>'.__('AA.Message').'  </label> <textarea type="text" class="form-control" name="help_content" required></textarea></div>';
       View::share('input_feedback_user',$input_feedback_user);


//---------------------------------------------admin notifications list select   titile  - icon 
        $inc_noti = [ 
            'ToPages'=>'sticky-note-o',  
            'devices'=>'desktop', 
            'systems'=>'apple', 
            'browsers'=>'chrome',   
            ];               
        View::share('inc_noti',$inc_noti);
//---------------------------------------------end admin notifications list select   titile  - icon

//--------------------------------------------- user system
        $sys_user = [ 
            'name',  
            'last_name', 
            'age', 
            'gender', 
            'local', 
            'favorite_design',  
            'username', 
            'role',  
            ];               
        View::share('sys_user',$sys_user);
//---------------------------------------------end user system

//---------------------------------------------category system
        $sys_category = [ 
            'name',  
            'local',            
            'to', 
            'adult',
            'icon',            
            'color', 
            'background_color',  
            'seo_title', 
            'seo_keywords', 
            'seo_description',
            'status',        
            ];               
        View::share('sys_category',$sys_category);
//---------------------------------------------end category system


//---------------------------------------------general system
        $sys_general = [ 
            'local',  
            'group', 
            'views', 
            'status', 
            'user_id',  
            'adult',
//---------- ads page
            'ads_name', 
            'ads_title', 
            'ads_description',  
            'ads_sponsored',     
            'ads_start_date', 
            'ads_end_date', 
            'ads_link',  
//---------- ads ages & gender page
            'user_age', 
            'user_gender', 
//---------- notifications page
            'noti_cookies_name', 
            'noti_title',  
            'noti_link', 
            'noti_message', 
            //'noti_start_date', 
            //'noti_end_date',  
            'noti_seconds', 
            'noti_color', 
            'noti_background_color', 
            'noti_position',  
            'noti_icon',
            'noti_user', 
            'noti_guest', 
//---------- Custom Codes page
            'code_name',  
            'code_type', 
            'code_code', 
//---------- Faqs page
            'faq_question', 
            'faq_answer', 
//---------- Analytics page
            'analytic_name', 
            'analytic_code', 
//---------- designs page
            'design_color',
//---------- Pages page
            'page_name',  
            'page_content', 
            'page_seo_title', 
            'page_seo_keywords', 
            'page_seo_description', 
//---------- Help page
            'help_title', 
            'help_content', 
//---------- Social Link page
            'social_link_name', 
            'social_link_icon', 
            'social_link_link', 
//---------- themes page
            'theme_name', 
            'theme_version', 
            'theme_auther', 
            'theme_to',  
            'theme_description', 
//---------- browsers 
            'isChrome',
            'isFirefox',  
            'isOpera',    
            'isSafari',                      
            'isIE', 
            'isEdge',  
            'isInApp',  
//---------- devices
            'isDesktop',                      
            'isMobile', 
            'isTablet', 
//---------- systems
            'isWindows',                      
            'isLinux', 
            'isMac',
            'isAndroid', 
            ];               
        View::share('sys_general',$sys_general);
//---------------------------------------------end general system

//---------------------------------------------site-settings by language
        $sys_lang = [ 
            'name',  
            'language',    
            'status',                      
            'rtl',       
            'user_id',

            'site_name',  
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

//---------- Upload System
            'maxFilesize',    
            'maxFiles',                      
            'retryChunksLimit', 
            'forceChunking',
            'retryChunks',  
//---------- select  theme
            'theme_admin',                      
            'theme_user', 

//---------- maintenances
            'maintenances_title',    
            'maintenances_message',                      
            'maintenances_opens', 
//---------- cookies
            'cookies_name',
            'cookies_title',  
            'cookies_message',
//---------- comments
            'comments_facebook',                      
            'comments_disqus',
//---------- contact
            'contact_mail',
            'contact_noti', 
//---------- company
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
//---------- error
            'error_400',  
            'error_403',
            'error_404',  
            'error_500',    
            'error_503',  
//---------- not found
            'not_found_title',                      
            'not_found_description', 
//---------- advertise
            'advertise_mail',  
            'advertise_price',    
            'advertise_title',                      
            'advertise_message', 
//---------- login
            'login_title',
            'login_description',  
            'login_keywords',    
//---------- register
            'register_title', 
            'register_description',
            'register_keywords',                      
//---------- crawler bot
            'crawler_Bot', 
//---------- browsers
            'isChrome',
            'isFirefox',  
            'isOpera',    
            'isSafari',                      
            'isIE', 
            'isEdge',  
            'isInApp',  
//---------- devices
            'isDesktop',                      
            'isMobile', 
            'isTablet',
//---------- systems
            'isWindows',                      
            'isLinux', 
            'isMac',
            'isAndroid', 
            ];               
        View::share('sys_lang',$sys_lang);
//---------------------------------------------end language system

//---------------------------------------------get icon from database & path
        $sys_lang_medea = [
            'site_logo'=>'site',  
            'site_favicon'=>'site',
            'register_image'=>'site',
            'login_image'=>'site',         
            ];  
        View::share('sys_lang_medea',$sys_lang_medea);
//---------------------------------------------end get icon from database & path
 

//---------------------------------------------site-settings
    if(str_contains(url()->current(), '/admin/site-settings')){

//-----------loader system
        $sys_load = [ 
            'load1',  
            'load2',            
            'load3', 
            'load4', 
            'load5',  
            'load6', 
            'load7', 
            'load8',
            'load9',
            'load10', 
            'load11', 
            'load12', 
            'load13',  
            'load14',            
            'load15', 
            'load16', 
            'load17',  
            'load18', 
            'load19', 
            'load20',
            'load21',
            'load22', 
            'load23', 
            'load24', 
            'load25',              
            'load26', 
            'load27', 
            'load28',  
            'load29', 
            'load30', 
            'load31',  
            'load32',
            'load33',
            'load34',
            'load35',               
            ];               
        View::share('sys_load',$sys_load);

//-------Select Permissions

        $primis = [ 
            'login'=>'User must log in before viewing the site',
            //'cache'=>'Page Cache If yes, a copy of each page will be created and placed in a  public / page-cache The page will be used every time the same page is requested, this feature helps speed up page loading and search engine indexing',
            'can_login'=>'Allow login',
            'can_register'=>'Allow Register',
            'delete_account'=>'Allow the user to delete their account',
            'design'=>'Allow the user to change the design If not, it will display the designs that were created from designs page',
            'two_factor'=>'Allow user to use google Authentication',
            'verification'=>'Verification page',    
            'my_feedBacks'=>'Allow viewing My feedBacks',
            'sidepar'=>'Allow sidepar',
            ];               
        View::share('primis',$primis);


//-----------form edit Basic Settings
         $form_site = [
            'site_name'=>'">',
            'site_logo'=>'">', 
            'site_favicon'=>'">', 
            'seo_title'=>'">', 
            'seo_keywords'=>'">', 
            'seo_description'=>'</textarea>',
            'style'=>'">',          
            //'font'=>'">',  
            ];               
        View::share('form_site',$form_site);

 //-----------form edit notfound
         $form_notfound = [
            'not_found_title'=>'">',
            //'not_found_icon'=>');"></div></div></div>',          
            'not_found_description'=>'</textarea>',  
            ];               
        View::share('form_notfound',$form_notfound);

 //-----------Upload Sysytem
        $toUpload = [  
            'maxFilesize'=>'File size limit MB', 
            'maxFiles'=>'Files that can be uploaded only once', 
            'retryChunksLimit'=>'how many times should it be retried',                                         
            ];               
        View::share('toUpload',$toUpload);
        $toUploadselect = [
            'forceChunking'=>'this defines whether every file should be chunked, even if the file size is below chunkSize. This means, that the additional chunk form data will be submitted and the chunksUploaded callback will be invoked.',  
            'retryChunks'=>'Whether a chunk should be retried if it fails', ]; 
        View::share('toUploadselect',$toUploadselect);

 //-----------crawler
        $crawlers = [ 
            'Bot'=>'Crawler / Bot',
            ];               
        View::share('crawlers',$crawlers);


 //-----------form edit login
         $form_login = [
            'login_title'=>'">',
            'login_description'=>'</textarea>',  
            'login_keywords'=>'">', 
            'login_image'=>'">',
            ];               
        View::share('form_login',$form_login);
        
 //-----------form edit register
         $form_register = [
            'register_title'=>'">',
            'register_description'=>'</textarea>',  
            'register_keywords'=>'">', 
            'register_image'=>'">',
            ];               
        View::share('form_register',$form_register);

//-----------form edit errors pages
        $up_errors_pages = [ 
            'error_400'=>'Error 400 Message',  
            'error_403'=>'Error 403 Message', 
            'error_404'=>'Error 404 Message', 
            'error_500'=>'Error 500 Message', 
            'error_503'=>'Error 503 Message',         
            ];               
        View::share('up_errors_pages',$up_errors_pages);

//-----------form edit comments
        $up_comments = [ 
            'comments_facebook'=>'Facebook',  
            'comments_disqus'=>'Disqus',        
            ];               
        View::share('up_comments',$up_comments);

//-----------form edit advertise
         $form_advertise = [
            'advertise_price'=>'">',
            'advertise_mail'=>'">', 
            'advertise_title'=>'">',  
            'advertise_message'=>'</textarea>', 
            ];               
        View::share('form_advertise',$form_advertise);
        
//-----------form edit maintenances
         $form_maintenances = [
            'maintenances_title'=>'">',
            'maintenances_message'=>'</textarea>', 
            'maintenances_opens'=>'">',  
            ];               
        View::share('form_maintenances',$form_maintenances); 

//-----------form edit contact
        $form_contact = [
            'contact_mail'=>'">',
            'contact_noti'=>'</textarea>',    
            ];               
        View::share('form_contact',$form_contact);

//-----------form edit cookies
        $form_cookies = [
            'cookies_name'=>'">',
            'cookies_title'=>'">',  
            'cookies_message'=>'</textarea>', 
            ];               
        View::share('form_cookies',$form_cookies);

//-----------form edit recaptcha
        $form_recaptcha = [
            'recaptcha_key'=>'">',
            'recaptcha_secret_key'=>'">', 
            ];               
        View::share('form_recaptcha',$form_recaptcha);

//-----------form edit company
         $form_company = [
            'company_address'=>'">',
            'company_email'=>'">',          
            'company_phone'=>'">',  
            'company_zip_code'=>'">',
            'company_city'=>'">',     
            'company_state'=>'">',
            'company_country'=>'">',     
            'company_registration'=>'">',
            'company_tax_number'=>'">',     
            'company_about'=>'</textarea>',
            'company_noti'=>'</textarea>',     
            'company_copyright'=>'">',
            ];               
        View::share('form_company',$form_company);

//---------------------------------------------site-settings Include pages [name page  - title] edit
        $inc_form_site = [  
            'basic'=>'Basic Settings',
            'permissions'=>'Permissions',           
            'loading'=>'Loading System',
            'upload'=>'Upload System',
            'login-page'=>'Login Page', 
            'register-page'=>'Register Page',           
            'devices'=>'Devices', 
            'systems'=>'Systems', 
            'browsers'=>'Browsers',   
            'crawler'=>'Robots',  
            'maintenances'=>'maintenances',
            'cookies'=>'Cookies',
            'errors-pages'=>'errors-pages',
            'company-Info'=>'company-Info',
            'contact-page'=>'contact-page',
            'comments'=>'comments',
            'advertise-us'=>'advertise-us',
            'blocked'=>'Block User', 
            'not-found'=>'Not Found',            
            'terms-of-service'=>'Terms of Service', 
            'privacy-policy'=>'Privacy Policy', 
            'GDPR'=>'GDPR', 
            'DMCA'=>'DMCA',                                
            ];               
        View::share('inc_form_site',$inc_form_site);
 
//---------------------------------------------select reload page
      $select_reload_page = '<label>'. __('AA.Update data for the active page that the user is using').'</label>
                         <select class="custom-select2 form-control" name="reload_page" style="width: 100%; height: 38px;">
                            <option value="60">'. __('AA.1 Minute').'</option>
                            <option value="300">'. __('AA.5 Minute').'</option>
                            <option value="600">'. __('AA.10 Minute').'</option>
                            <option value="1200">'. __('AA.20 Minute').'</option>
                            <option value="1800">'. __('AA.30 Minute').'</option>
                            <option value="2400">'. __('AA.40 Minute').'</option>
                            <option value="3000">'. __('AA.50 Minute').'</option>
                            <option value="3600">'. __('AA.1 Hour').'</option>
                            <option value="7200">'. __('AA.2 Hour').'</option>
                            <option value="10800">'. __('AA.3 Hour').'</option>
                            <option value="14400">'. __('AA.4 Hour').'</option>
                            <option value="18000">'. __('AA.5 Hour').'</option>   
                        </select>';
       View::share('select_reload_page',$select_reload_page);


}
//---------------------------------------------end site-settings

//---------------------------------------------edit ads

    if(str_contains(url()->current(), '/admin/ads')){
        $form_ads = [
            'ads_name'=>'">',
            'ads_title'=>'">', 
            'ads_description'=>'</textarea>', 
            'ads_sponsored'=>'">', 
            'ads_image_promo'=>');"></div></div></div>',    
            //'ads_start_date'=>'">', 
            //'ads_end_date'=>'">', 
            'ads_link'=>'">', 
            ];               
        View::share('form_ads',$form_ads);  
    }
//---------------------------------------------end edit ads

//---------------------------------------------edit notifications
    if(str_contains(url()->current(), '/admin/notifications')){
        $form_noti = [
            'noti_cookies_name'=>'">',
            'noti_title'=>'">', 
            'noti_link'=>'">', 
            'noti_message'=>'</textarea>', 
            //'noti_start_date'=>'">', 
            //'noti_end_date'=>'">', 
            'noti_seconds'=>'">',
            'noti_color'=>'">', 
            'noti_background_color'=>'">', 
            'noti_icon'=>'">',
            'position'=>'', 
            ];               
        View::share('form_noti',$form_noti);  
    }
//---------------------------------------------end edit notifications

//---------------------------------------------edit category
    //if(str_contains(url()->current(), '/admin/categorys')){
        $form_category = [
            'name'=>'">',
            'icon'=>'">', 
            'iconsvg'=>');"></div></div></div>',         
            'color'=>'">', 
            'background_color'=>'">', 
            'seo_title'=>'">', 
            'seo_keywords'=>'">', 
            'seo_description'=>'</textarea>', 
            ];               
        View::share('form_category',$form_category);  
    //}
//---------------------------------------------end edit category

//---------------------------------------------edit custom code
    if(str_contains(url()->current(), '/admin/custom_codes')){
        $form_code = [
            'code_name'=>'">',
            'code_code'=>'</textarea>', 
            'code_typ'=>'', 
            ];               
        View::share('form_code',$form_code);  
    }
//---------------------------------------------end edit custom code

//---------------------------------------------edit analytics
    if(str_contains(url()->current(), '/admin/analytics')){
        $form_analytic = [
            'analytic_name'=>'">',
            'analytic_code'=>'</textarea>', 
            ];               
        View::share('form_analytic',$form_analytic); 
    }
//---------------------------------------------end edit analytics

//---------------------------------------------edit faqs
    if(str_contains(url()->current(), '/admin/faqs')){
        $form_faq = [
            'faq_question'=>'">', 
            'faq_answer'=>'</textarea>', 
            ];               
        View::share('form_faq',$form_faq); 
    }
//---------------------------------------------end edit faqs

//---------------------------------------------edit pages
    if(str_contains(url()->current(), '/admin/pages')){
        $form_page = [
            'page_name'=>'">',
            'page_content'=>'</textarea>',
            'page_seo_title'=>'">',
            'page_seo_keywords'=>'">',
            'page_seo_description'=>'</textarea>',
            ];               
        View::share('form_page',$form_page); 
    }
//---------------------------------------------end edit pages

//---------------------------------------------edit help page
    if(str_contains(url()->current(), '/admin/help_page')){
        $form_help = [
            'help_title'=>'">',
            'help_content'=>'</textarea>',
            ];               
        View::share('form_help',$form_help); 
    }
//---------------------------------------------end edit help page

//---------------------------------------------edit social login
    if(str_contains(url()->current(), '/admin/social_login')){
        $form_sys_login = [
            'login_client_id'=>'">', 
            'login_client_secret'=>'">',
            ];               
        View::share('form_sys_login',$form_sys_login); 
    }
//---------------------------------------------end edit social login

//---------------------------------------------edit social link 
    if(str_contains(url()->current(), '/admin/social_links')){
        $form_social_link = [
            'social_link_name'=>'">',
            'social_link_icon'=>'">',
            'social_link_link'=>'">',
            ];               
        View::share('form_social_link',$form_social_link); 
    }
//---------------------------------------------end edit social link 


//---------------------------------------------edit routes page
    if(str_contains(url()->current(), '/admin/to_routes')){
        $form_routes_page = [
            'name'=>'">',
            'path'=>'">', 
            ];               
        View::share('form_routes_page',$form_routes_page); 
    }
//---------------------------------------------end edit routes page

//---------------------------------------------edit theme
    if(str_contains(url()->current(), '/admin/themes')){
        $form_theme = [
            'theme_name'=>'">',
            'theme_version'=>'">',
            'theme_auther'=>'">',
            'theme_description'=>'</textarea>',
            'to'=>'',
            'theme_image'=>');"></div></div></div>',
            ];               
        View::share('form_theme',$form_theme); 
    }
//--------------------------------------------end edit theme

//------------for users
$Touser = array(

    //"English" => '',
    "notio" => '<i class="icon-copy dw dw-information"></i>',
    "load1" => '<div class="load-wrapp">
      <div class="load-1">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>',

    "load2" => '<div class="load-wrapp">
      <div class="load-2">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>',

    "load3" => '<div class="load-wrapp">
      <div class="load-3">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>',

    "load4" => '<div class="load-wrapp">
      <div class="load-4">
        <div class="ring-1"></div>
      </div>
    </div>',

    "load5" => '<div class="load-wrapp">
      <div class="load-5">
        <div class="ring-2">
          <div class="ball-holder">
            <div class="ball"></div>
          </div>
        </div>
      </div>
    </div>',

    "load6" => '<div class="load-wrapp">
      <div class="load-6">
        <div class="letter-holder">
          <div class="l-1 letter">L</div>
          <div class="l-2 letter">o</div>
          <div class="l-3 letter">a</div>
          <div class="l-4 letter">d</div>
          <div class="l-5 letter">i</div>
          <div class="l-6 letter">n</div>
          <div class="l-7 letter">g</div>
          <div class="l-8 letter">.</div>
          <div class="l-9 letter">.</div>
          <div class="l-10 letter">.</div>
        </div>
      </div>
    </div>',

    "load7" => '<div class="load-wrapp">
      <div class="load-7">
        <div class="square-holder">
          <div class="square"></div>
        </div>
      </div>
    </div>',

    "load8" => '<div class="load-wrapp">
      <div class="load-8">
        <div class="line"></div>
      </div>
    </div>',

    "load9" => '<div class="load-wrapp">
      <div class="load-9">
        <div class="spinner">
          <div class="bubble-1"></div>
          <div class="bubble-2"></div>
        </div>
      </div>
    </div>',

    "load10" => '<div class="load-wrapp">
      <div class="load-10">
        <div class="bar"></div>
      </div>
    </div>',

    "load11" => '<span class="loader-11"></span>',
    "load12" => '<span class="loader-12"></span>',
    "load13" => '<span class="loader-13"></span>',
    "load14" => '<span class="loader-14"></span>',
    "load15" => '<span class="loader-15"></span>',
    "load16" => '<span class="loader-16"></span>',
    "load17" => '<span class="loader-17"></span>',
    "load18" => '<span class="loader-18"></span>',
    "load19" => '<span class="loader-19"></span>',
    "load20" => '<span class="loader-20"></span>',
    "load21" => '<span class="loader-21"></span>',
    "load22" => '<span class="loader-22"></span>',
    "load23" => '<span class="loader-23"></span>',
    "load24" => '<span class="loader-24"></span>',
    "load25" => '<span class="loader-25"></span>',
    "load26" => '<span class="loader-27"></span>',
    "load27" => '<span class="loader-28"></span>',
    "load28" => '<span class="loader-29"></span>',
    "load29" => '<span class="loader-30"></span>',
    "load30" => '<span class="loader-31"></span>',
    "load31" => '<span class="loader-41"></span>',
    "load32" => '<span class="loader-44"></span>',
    "load33" => '<span class="loader-56"></span>',
    "load34" => '<span class="loader-57"></span>',
    "load35" => '<span class="loader-59"></span>',

    "noti" => '<i class="icon-copy dw dw-information"></i>',
);
        View::share('Touser',$Touser);
//------------end for users


//------------for admin 
$admin = array(

    "style_noti" => '<style type="text/css">.modal-backdrop {position: initial !important;top: 0 !important;left: 0 !important;z-index: 0 !important;width: 0vw !important;height: 0vh !important;background-color: #0000 !important;}.modal-open {overflow:overlay;}</style>',

    "style_noti_top" => '<style type="text/css">
    .alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    z-index: 999999;
    top: 80px;
    position:fixed;
    width: 97%;
    margin: 0px;
}
</style>',

    "style_noti_down" => '<style type="text/css">
    .alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    z-index: 999999;
    bottom: 10px;
    position:fixed;z
    width: 97%;
    margin: 0px;
}
</style>',

    "adult" => '<div class="container timeline row"><ul style="width:100%;"><li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                '.__('AA.adult').'
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.Adult_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="adult" type="hidden" value="No" required>
                        <input type="checkbox" name="adult" 
                        value="Yes"',

    "adultclose" => '</div> 
                </div>
            </div></li></ul></div>',


    "status" => '<div class="container timeline row"><ul style="width:100%;"><li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                '.__('AA.status').'
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.status_info').'</h5>
                    </div>
                    <div class="col-md-3">',

    "statusclose" => '</div> 
                </div>
            </div></li></ul></div>',

    "noti_user" => '<div class="container timeline row"><ul style="width:100%;"><li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                '.__('AA.noti_user').'
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.noti_user_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="noti_user" type="hidden" value="InActive" required>
                        <input type="checkbox" name="noti_user" 
                        value="Active"',

    "noti_userclose" => '</div> 
                </div>
            </div></li></ul></div>',



    "noti_guest" => '<div class="container timeline row"><ul style="width:100%;"><li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">
                '.__('AA.noti_guest').'
            </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.noti_guest_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="noti_guest" type="hidden" value="InActive" required>
                        <input type="checkbox" name="noti_guest" 
                        value="Active"',

    "noti_guestclose" => '</div> 
                </div>
            </div></li></ul></div>',

    "form" => '<div class="container timeline row pd-20"><ul style="width:100%;">',

    "open" => ' <li style="padding-bottom:30px;padding-top:10px;">
            <div class="timeline-date">',

    "and" => '</div>
            <div class="timeline-desc card-box">',          


    "close" => '</div></li>',

    "eform" => '</ul></div>',


    "form1" => '<div class="container timeline row"><ul style="width:100%;"><li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">',

    "next1" => '</div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">',          


    "close1" => '</li></ul></div>',

    "end" => '">',
    "endt" => '</textarea>',
    "endi" => ');"></div></div></div>', 
    "notio" => '<i class="icon-copy dw dw-information"></i>',


    "lang" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.lang_info').'" placeholder="'.__('AA.lang_info').'" class="form-control"  name="name" value="',  
         "language" => '<input '.$tooltip.'"'.__('AA.end_url_info').'" placeholder="'.__('AA.end_url_info').'" type="text" class="form-control"  name="language" value="', 
         "flag" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="flag" type="file" id="logoUpload" accept=".png, .jpg, .jpeg" />
                        <label for="logoUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="logoPreview" style="background-image: url('.(env('APP_URL')).'/flags/',      
    ),


    "site" => array(
         "site_name" => '<input type="text" class="form-control" name="site_name"value="',

         "site_logo" => '<input type="file" class="form-control" name="site_logo"value="',

         "site_favicon" => '<input type="file" class="form-control" name="site_favicon"value="',

         "seo_title" => '<input type="text" class="form-control" name="seo_title" value="',

         "seo_keywords" => '<input type="text" class="form-control"  name="seo_keywords" data-role="tagsinput" value="',

         "seo_description" => '<textarea type="text" class="form-control" name="seo_description" >',

         "style" => '<input type="color" class="form-control" name="style" value="',

         //"font" => '<input type="text" class="form-control" name="font" value="',
    ),



    "notfound" => array(
         "not_found_title" => '<input type="text" class="form-control" name="not_found_title" value="',
         //"not_found_icon" => '<div class="image-upload">
                                  //<div class="image-edit">
                        //<input name="not_found_icon" type="file" id="faviconUpload" accept=".png, .jpg, .jpeg" />
                        //<label for="faviconUpload"></leble>
                                  //</div>
                                  //<div class="image-preview">
                        //<div id="faviconPreview" style="background-image: url('.(env('APP_URL')).'/icons/',
         "not_found_description" => '<textarea type="text" class="form-control" name="not_found_description" >',       

    ),


    "blocked" => array(
         "blocked_user" => '<textarea type="text" class="form-control" name="blocked_user" >',
   
    ),



    "login_page" => array(
         "login_title" => '<input type="text" class="form-control"  name="login_title" value="',
         "login_description" => '<textarea type="text" class="form-control" name="login_description" >',
         "login_keywords" => '<input type="text" class="form-control"  name="login_keywords" data-role="tagsinput" value="',       

         "login_image" => '<input type="file" class="form-control"  name="login_image" value="',

    ),




    "register_page" => array(
         "register_title" => '<input type="text" class="form-control"  name="register_title" value="',
         "register_description" => '<textarea type="text" class="form-control" name="register_description" >',
         "register_keywords" => '<input type="text" class="form-control"  name="register_keywords" data-role="tagsinput" value="',       

         "register_image" => '<input type="file" class="form-control"  name="register_image" value="',

    ),




    "advertise" => array(
         "advertise_price" => '<input type="number" '.$tooltip.'"'.__('AA.Advertise price per day').'" placeholder="'.__('AA.Advertise price per day').'" class="form-control" name="advertise_price" value="',
         "advertise_mail" => '<input type="email" '.$tooltip.'"'.__('AA.Email to receive requests').'" placeholder="'.__('AA.Email to receive requests').'" class="form-control" name="advertise_mail" value="',
         "advertise_title" => '<input type="text" class="form-control" name="advertise_title" value="',
         "advertise_message" => '<textarea type="text" class="form-control" style="height:340px;" name="advertise_message" >',

    ),



    "maintenances" => array(
         "maintenances_title" => '<input type="text" class="form-control" name="maintenances_title" value="',
         "maintenances_message" => '<textarea type="text" class="form-control" name="maintenances_message">',
         "maintenances_opens" => '<input type="date" class="form-control" name="maintenances_opens" value="',    
    ),


    "company" => array(
         "company_address" => '<input type="text" class="form-control" name="company_address" value="',
         "company_email" => '<input type="email" class="form-control" name="company_email" value="',
         "company_phone" => '<input type="phone" class="form-control" name="company_phone" value="',
         "company_zip_code" => '<input type="number" class="form-control" name="company_zip_code" value="',
         "company_city" => '<input type="text" class="form-control" name="company_city" value="',
         "company_state" => '<input type="text" class="form-control" name="company_state" value="',
         "company_country" => '<input type="text" class="form-control" name="company_country" value="',
         "company_registration" => '<input type="text" class="form-control" name="company_registration" value="',
         "company_tax_number" => '<input type="text" class="form-control" name="company_tax_number" value="',
         "company_about" => '<textarea type="text" class="form-control" name="company_about" >',
         "company_noti" => '<textarea type="text" class="form-control" style="height:180px;" name="company_noti" >',
         "company_copyright" => '<input type="text" class="form-control" name="company_copyright" value="',
    ),


    "contact" => array(
         "contact_mail" => '<input type="email" '.$tooltip.'"'.__('AA.Email to receive requests').'" placeholder="'.__('AA.Email to receive requests').'" class="form-control" name="contact_mail" value="',
         "contact_noti" => '<textarea type="text" class="form-control" name="contact_noti" >',     
    ),




    "cookies" => array(
         "cookies_name" => '<input '.$tooltip.'"'.__('AA.cookies_name_info').'" type="text" class="form-control" name="cookies_name" value="',
         "cookies_title" => '<input type="text" class="form-control" name="cookies_title" value="',
         "cookies_message" => '<textarea type="text" class="form-control" style="height:120px;" name="cookies_message" >',
    ),



    "routes_page" => array(
         "name" => '<input type="text" class="form-control" name="name" value="',
         "path" => '<input type="text" class="form-control"  name="path" value="',
    ),

    "ads" => array(
         "ads_name" => '<input type="text" class="form-control"  name="ads_name" value="',
         "ads_title" => '<input type="text" class="form-control"  name="ads_title" value="',   
         "ads_description" => '<textarea type="text" class="form-control" name="ads_description" >',   
         "ads_sponsored" => '<input type="text" class="form-control"  name="ads_sponsored" value="',
         "ads_image_promo" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="ads_image_promo" type="file" id="registerUpload" accept=".png, .jpg, .jpeg" />
                        <label for="registerUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="registerPreview" style="background-image: url('.(env('APP_URL')).'/ads/',
         //"ads_start_date" => '<input type="date" class="form-control"  name="ads_start_date" value="',
         //"ads_end_date" => '<input type="date" class="form-control"  name="ads_end_date" value="',  
         "ads_link" => '<input type="url" class="form-control"  name="ads_link" value="',     
    ),


    "noti" => array(
         "noti_cookies_name" => '<input type="text" class="form-control" name="noti_cookies_name" value="',
         "noti_title" => '<input type="text" class="form-control" name="noti_title" value="',   
         "noti_link" => '<input type="url" class="form-control" name="noti_link" value="',    
         "noti_message" => '<textarea type="text" class="form-control" name="noti_message" >',
         //"noti_start_date" => '<input type="date" class="form-control" name="noti_start_date" value="',
         //"noti_end_date" => '<input type="date" class="form-control" name="noti_end_date" value="',  
         "noti_seconds" => '<input type="number" class="form-control" name="noti_seconds" value="', 
         "noti_color" => '<input type="color" class="form-control" name="noti_color" value="', 
         "noti_background_color" => '<input type="color" class="form-control" name="noti_background_color" value="', 
         "noti_icon" => '<label><a style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a></label><input type="text" class="form-control" name="noti_icon" value="', 
         "position" => '<select class="custom-select2 form-control" name="noti_position" style="width: 100%; height: 38px;"> <option value="Down"> '.__('AA.Down').'</option> <option value="Top">'.__('AA.Top').'</option> <option value="Window">'.__('AA.Pop-up Window').'</option> </select>', 
    ),


    "category" => array(
         "name" => '<input type="text" class="form-control" name="name" value="',
         "icon" => '<input type="text" class="form-control" name="icon" value="',      
         "iconsvg" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="iconsvg" type="file" id="editUpload" accept=".png, .jpg, .jpeg" />
                        <label for="editUpload"></leble>
                                  </div> 
                                  <div class="image-preview">
                        <div id="editPreview" style="background-image: url('.(env('APP_URL')).'/icons/categorys/',

         "color" => '<input type="color" class="form-control" name="color" value="',
         "background_color" => '<input type="color" class="form-control" name="background_color" value="', 
         "seo_title" => '<input type="text" class="form-control" name="seo_title" value="', 
         "seo_keywords" => '<input type="text" class="form-control" name="seo_keywords" data-role="tagsinput" value="',
         "seo_description" => '<textarea type="text" class="form-control" style="height:140px;" name="seo_description">', 

    ),


    "code" => array(
         "code_name" => '<input type="text" class="form-control"  name="code_name" value="',
         "code_code" => '<textarea type="text" class="form-control" style="height:140px;" name="code_code">',  
         "code_typ" => '<select class="custom-select2 form-control" name="code_type" style="width: 100%; height: 38px;"> <option value="css">'.__('AA.CSS').'</option> <option value="js">'.__('AA.Java Script').'</option> <option value="mt">'.__('AA.Meta Tag').'</option> </select>',  
    ),


    "analytic" => array(
         "analytic_name" => '<input type="text" class="form-control"  name="analytic_name" value="',
         "analytic_code" => '<textarea type="text" class="form-control" style="height:140px;" name="analytic_code">', 

    ),

    "faq" => array(
         "faq_question" => '<input type="text" class="form-control"  name="faq_question" value="',
         "faq_answer" => '<textarea type="text" class="form-control" style="height:140px;" name="faq_answer">',  

    ),


    "page" => array(
         "page_name" => '<input type="text" class="form-control"  name="page_name" value="',
         "page_content" => '<textarea type="text" class="form-control" name="page_content" >',   
         "page_seo_title" => '<input type="text" class="form-control"  name="page_seo_title" value="',
         "page_seo_keywords" => '<input type="text" class="form-control"  data-role="tagsinput" name="page_seo_keywords" value="',
         "page_seo_description" => '<textarea type="text" class="form-control" name="page_seo_description">', 
    ),


    "help" => array(
         "help_title" => '<input type="text" class="form-control"  name="help_title" value="',
         "help_content" => '<textarea type="text" class="form-control" name="help_content" >',
    ),


    "login" => array(
         "login_client_id" => '<input type="text" class="form-control"  name="client_id" value="',  
         "login_client_secret" => '<input type="text" class="form-control"  name="client_secret" value="', 
    ),


    "user" => array(
         "name" => '<input type="text" class="form-control"  name="name" value="',  
         "last_name" => '<input type="text" class="form-control"  name="last_name" value="', 
         "age" => '<input type="text" class="form-control"  name="age" value="',  
         "gender" => '<input type="text" class="form-control"  name="gender" value="',  
         "favorite_design" => '<input type="color" class="form-control"  name="favorite_design" value="', 
         "username" => '<input type="text" class="form-control"  name="username" value="',  
    ),


    "social_link" => array(
         "social_link_name" => '<input type="text" class="form-control"  name="social_link_name" value="',
         "social_link_icon" => '<label><a style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a></label><input type="text" class="form-control"  name="social_link_icon" value="', 
         "social_link_link" => '<input type="url" class="form-control"  name="social_link_link" value="',  
    ),

    "theme" => array(
         "theme_name" => '<input type="text" class="form-control"  name="theme_name" value="',
         "theme_version" => '<input type="number" class="form-control"  name="theme_version" value="', 
         "theme_auther" => '<input type="text" class="form-control"  name="theme_auther" value="',
         "theme_description" => '<textarea type="text" class="form-control"  name="theme_description" >',
         "to" => '<select class="custom-select2 form-control" name="theme_to" style="width: 100%; height: 38px;"> <option value="Admin">'.__('AA.Admin').'</option><option value="User">'.__('AA.User').'</option> </select>',  
         "theme_image" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="theme_image" type="file" id="registerUpload" accept=".png, .jpg, .jpeg" />
                        <label for="registerUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="registerPreview" style="background-image: url('.(env('APP_URL')).'/uploads/themes/',
    ),


// admin add new
"add" => array(
 
    "latest_update" => array(
         "help_content" => '<textarea type="text" placeholder="'.__('AA.update_user').'" class="form-control" name="help_content" required></textarea>',
    ),


    "lang" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.lang_info').'" placeholder="'.__('AA.lang_info').'" class="form-control"  name="name" >',  
         "url" => '<input '.$tooltip.'"'.__('AA.end_url_info').'" placeholder="'.__('AA.end_url_info').'" type="text" class="form-control"  name="language" >', 
         "rtl" => '<div '.$tooltip.'"'.__('AA.rtl_info').'"><select class="custom-select2 form-control" name="rtl" style="width: 100%; height: 38px;"> <option value="No">'.__('AA.no').'</option> <option value="Yes">'.__('AA.yes').'</option> </select></div>', 
         "flag" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="flag" type="file" id="logoUpload" accept=".png, .jpg, .jpeg" />
                        <label for="logoUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="logoPreview" style="background-image: url('.(env('APP_URL')).'/flags);"></div></div></div>',  
    ),


    "route" => array(
         "name" => '<input '.$tooltip.'"'.__('AA.name').'" placeholder="'.__('AA.name').'" type="text" class="form-control"  name="name" ><br>', 

         "icon" => '<a style="padding: 10px;color: #1b00ff;" style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a><input '.$tooltip.'"'.__('AA.icon').'" placeholder="'.__('AA.icon').'" type="text" class="form-control"  name="icon" ><br>', 

    ),


    "ads" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.ad_name_info').'" placeholder="'.__('AA.ad_name_info').'" class="form-control"  name="ads_name" >',
         "title" => '<input '.$tooltip.'"'.__('AA.Ad title').'"  placeholder="'.__('AA.Ad title').'" type="text" class="form-control"  name="ads_title" >',   
         "description" => '<textarea type="text" '.$tooltip.'"'.__('AA.Short description').'"  placeholder="'.__('AA.Short description').'" class="form-control" name="ads_description" ></textarea>',   
         "sponsored" => '<input type="text" class="form-control" '.$tooltip.'"'.__('AA.This ad is sponsored').'" placeholder="'.__('AA.This ad is sponsored').'" name="ads_sponsored" >',
         "image_promo" => '<div class="image-upload">
                                  <div class="image-edit">
                        <input name="ads_image_promo" type="file" id="registerUpload" accept=".png, .jpg, .jpeg" />
                        <label for="registerUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="registerPreview" style="background-image: url('.(env('APP_URL')).'/ads);"></div></div></div>',

         //"start_date" => '<input '.$tooltip.'"'.__('AA.Schedule this').'" placeholder="'.__('AA.Schedule this').'" type="date" class="form-control"  name="ads_start_date" >',
         //"end_date" => '<input '.$tooltip.'"'.__('AA.Expiry Date').'" placeholder="'.__('AA.Expiry Date').'" type="date" class="form-control"  name="ads_end_date" >',  
         "link" => '<input type="url" '.$tooltip.'"'.__('AA.Redirect link').'" placeholder="'.__('AA.Redirect link').'" class="form-control"  name="ads_link" >',     
    ),



    "siteicon" => array(
         "icon" => '<input '.$tooltip.'"'.__('AA.Add Name ...').'" placeholder="'.__('AA.Add Name ...').'" type="text" class="form-control" name="iconName" >',       

    ),


    "user" => array(
         "age" => '<input type="number" placeholder="'.__('AA.Like 18 or something else').'" '.$tooltip.'"'.__('AA.Like 18 or something else').'" class="form-control"  name="user_age" >',
         "gender" => '<input type="text" placeholder="'.__('AA.male or female').'" '.$tooltip.'"'.__('AA.male or female').'" class="form-control"  name="user_gender" >',         

    ),

    "notification" => array(
         "noti_user" => '
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.noti_user_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="noti_user" type="hidden" value="InActive" required>
                        <input type="checkbox" name="noti_user" 
                        value="Active"  
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>',   

         "noti_guest" => '
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.noti_guest_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="noti_guest" type="hidden" value="InActive" required>
                        <input type="checkbox" name="noti_guest" 
                        value="Active"  
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>',   
 

         "cookies_name" => '<input '.$tooltip.'"'.__('AA.cookies_name_info').'" placeholder="'.__('AA.cookies_name_info').'" type="text" class="form-control" name="noti_cookies_name" >',
         "title" => '<input '.$tooltip.'"'.__('AA.Add title ...').'" placeholder="'.__('AA.Add title ...').'" type="text" class="form-control" name="noti_title" >',   
         "link" => '<input '.$tooltip.'"'.__('AA.link_info').'" placeholder="'.__('AA.link_info').'" type="url" class="form-control" name="noti_link" >',    
         "message" => '<textarea type="text" class="form-control" name="noti_message" ></textarea>',
         //"start_date" => '<input '.$tooltip.'"'.__('AA.Schedule this').'" placeholder="'.__('AA.Schedule this').'" type="date" class="form-control" name="noti_start_date" >',
         //"end_date" => '<input '.$tooltip.'"'.__('AA.Expiry Date').'" placeholder="'.__('AA.Expiry Date').'" type="date" class="form-control" name="noti_end_date" >',  
         "seconds" => '<input '.$tooltip.'"'.__('AA.seconds_info').'" placeholder="'.__('AA.seconds_info').'" type="number" class="form-control" name="noti_seconds" >', 
         "color" => '<input type="color" '.$tooltip.'"'.__('AA.color_text').'" placeholder="'.__('AA.color_text').'" class="form-control" name="noti_color" >', 
         "background_color" => '<input '.$tooltip.'"'.__('AA.background_color').'" placeholder="'.__('AA.background_color').'" type="color" class="form-control" name="noti_background_color" >', 
         "icon" => '<label><a style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a></label><input '.$tooltip.'"'.__('AA.icon_info').'" placeholder="'.__('AA.icon_info').'"  type="text" class="form-control" name="noti_icon" >', 
         "position" => '<select class="custom-select2 form-control" name="noti_position" style="width: 100%; height: 38px;"> <option value="Down">'.__('AA.Down').'</option> <option value="Top">'.__('AA.Top').'</option> <option value="Window">'.__('AA.Pop-up Window').'</option> </select>', 
    ),


    "category" => array(
         "adult" => '
                <div class="pd-10 row">
                    <div class="col-md-9">
                      <h5 class="mb-10 h4">'.__('AA.Adult_info').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="adult" type="hidden" value="No" required>
                        <input type="checkbox" name="adult" 
                        value="Yes"  
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>',     
         "name" => '<input type="text" class="form-control" name="name" >',     
         "iconsvg" => '<div '.$tooltip.'"'.__('AA.image or gif').'"  class="image-upload">
                                  <div class="image-edit">
                        <input name="iconsvg" type="file" id="registerUpload" accept=".png, .jpg, .jpeg" />
                        <label for="registerUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="registerPreview" style="background-image: url('.(env('APP_URL')).'/uploads/);"></div></div></div>',
         "icon" => '<a style="padding: 10px;color: #1b00ff;" style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a><input '.$tooltip.'"'.__('AA.icon').'" placeholder="'.__('AA.icon').'" type="text" class="form-control"  name="icon" ><br>',       
         "color" => '<input '.$tooltip.'"'.__('AA.icon Color').'" type="color" class="form-control" name="color" >',
         "background_color" => '<input '.$tooltip.'"'.__('AA.icon Background Color').'" type="color" class="form-control" name="background_color" >', 
         "seo_title" => '<input type="text" '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" class="form-control" name="seo_title" >', 
         "seo_keywords" => '<input type="text" '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" class="form-control" name="seo_keywords" data-role="tagsinput" >',
         "seo_description" => '<textarea type="text" '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" class="form-control" style="height:140px;" name="seo_description"></textarea>', 

    ),


    "code" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.Like a new design or a custom').'" placeholder="'.__('AA.Like a new design or a custom').'" class="form-control"  name="code_name" >',
         "code" => '<textarea type="text" class="form-control" style="height:140px;" name="code_code"></textarea>',  
         "code_typ" => '<select class="custom-select2 form-control" name="code_type" style="width: 100%; height: 38px;"> <option value="css">'.__('AA.CSS').'</option> <option value="js">'.__('AA.Java Script').'</option> <option value="mt">'.__('AA.Meta Tag').'</option> </select>',   
    ),


    "analytic" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.Like Google Analytics or something else').'" placeholder="'.__('AA.Like Google Analytics or something else').'" class="form-control"  name="analytic_name" >',
         "code" => '<textarea type="text" class="form-control" style="height:140px;" name="analytic_code"></textarea>', 

    ),

    "faq" => array(
         "question" => '<input type="text" class="form-control"  name="faq_question" >',
         "answer" => '<textarea type="text" class="form-control" style="height:140px;" name="faq_answer"></textarea>',  

    ),

    "design" => array(
         "color" => '<input type="color" class="form-control" style="height:240px;" name="design_color" >',
    ),


    "page" => array( 
         "page_name" => '<input type="text" class="form-control"  name="page_name" >',
         "page_content" => '<textarea style="height: 480px !important;" type="text" class="form-control" name="page_content" ></textarea>',   
         "page_seo_title" => '<input '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" type="text" class="form-control"  name="page_seo_title" >',
         "page_seo_keywords" => '<input '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" type="text" class="form-control"  data-role="tagsinput" name="page_seo_keywords" >',
         "page_seo_description" => '<textarea '.$tooltip.'"'.__('AA.To search engines').'" placeholder="'.__('AA.To search engines').'" type="text" class="form-control" name="page_seo_description" ></textarea>', 
    ),


    "help" => array(
         "title" => '<input '.$tooltip.'"'.__('AA.Add title ...').'" placeholder="'.__('AA.Add title ...').'" type="text" class="form-control"  name="help_title" >',
         "content" => '<textarea type="text" '.$tooltip.'"'.__('AA.Like how the site works, how the team works, or how to help').'" placeholder="'.__('AA.Like how the site works, how the team works, or how to help').'"class="form-control" name="help_content" ></textarea>',
    ),


    "social_login" => array(
         "login_name" => '<input type="text" class="form-control"  name="login_name" >',
         "client_id" => '<input type="text" class="form-control"  name="login_client_id" >',  
         "client_secret" => '<input type="text" class="form-control"  name="login_client_secret" >', 
    ),

    "social_link" => array(
         "name" => '<input type="text" '.$tooltip.'"'.__('AA.Like YouTube or Twitter').'" placeholder="'.__('AA.Like YouTube or Twitter').'" class="form-control"  name="social_link_name" >',
         "icon" => '<label><a style="padding: 10px;color: #1b00ff;" style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/icons" target="_blank">'. __('AA.icons Page').'</a></label><input '.$tooltip.'"'.__('AA.icon_info').'" placeholder="'.__('AA.icon_info').'" type="text" class="form-control"  name="social_link_icon" >', 
         "link" => '<input type="url" '.$tooltip.'"'.__('AA.Full link').'" placeholder="'.__('AA.Full link').'" class="form-control"  name="social_link_link" >',  
    ),

    "theme" => array(
         "name" => '<input '.$tooltip.'"'.__('AA.The name must match the folder name').'" placeholder="'.__('AA.The name must match the folder name').'" type="text" class="form-control"  name="theme_name" >',
         "version" => '<input '.$tooltip.'"'.__('AA.Current version').'" placeholder="'.__('AA.Current version').'" type="number" class="form-control"  name="theme_version" >', 
         "auther" => '<input '.$tooltip.'"'.__('AA.Name of the editor or owner').'" placeholder="'.__('AA.Name of the editor or owner').'" type="text" class="form-control"  name="theme_auther" >',
         "description" => '<textarea '.$tooltip.'"'.__('AA.Simple description').'" placeholder="'.__('AA.Simple description').'" type="text" class="form-control"  name="theme_description" ></textarea>',
         "theme_to" => '<select class="custom-select2 form-control" name="theme_to" style="width: 100%; height: 38px;"> <option value="Admin">'.__('AA.Admin').'</option><option value="User">'.__('AA.User').'</option> </select>',  
         "theme_image" => '<div '.$tooltip.'"'.__('AA.image display').'"  class="image-upload">
                                  <div class="image-edit">
                        <input name="theme_image" type="file" id="registerUpload" accept=".png, .jpg, .jpeg" />
                        <label for="registerUpload"></leble>
                                  </div>
                                  <div class="image-preview">
                        <div id="registerPreview" style="background-image: url('.(env('APP_URL')).'/uploads/);"></div></div></div>',
    ),


),


);
View::share('admin',$admin);


    $select_features = '<label>'. __('AA.For Page').'</label>
    <select class="custom-select2 form-control" name="to" style="width: 100%; height: 38px;">';

        foreach($get_routes as $route){
            if($route->for=="User")
            $select_features.='<option value="'.$route->name.'">'.$route->name.'</option>';
        }

    $select_features.='</select>';

    View::share('select_features',$select_features);


    $select_toPages = '<div '.$tooltip.'"'.__('AA.Activate or deactivate').'" class="faq-wrap"><div id="accordion"><div class="card">
                            <div class="card-header">
                                <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#toPages">
                                    '.__('AA.Show pages').' <i class="icon-copy fa fa-sticky-note-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="toPages" class="collapse" data-parent="#accordion">
                            <h6 class="pl-10">'.__('AA.Select pages to allow this Notification to be displayed on').'</h6><hr>
                                <div class="card-body"><div class="container timeline row"><ul style="width:100%;">
                                ';

        foreach($get_routes as $route){
            if($route->for=="User")  
            $select_toPages.='<li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">'.$route->name.' </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9"> 
                      <h5 class="mb-10 h4">'.$route->name.' '.__('AA.Page').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="'.$route->name.'" type="hidden" value="inActive" required>
                        <input type="checkbox" name="'.$route->name.'" 
                        value="Active"  checked
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>';
        }

    $select_toPages.='</ul></div></div>
                            </div>
                        </div></div></div>';
    View::share('select_toPages',$select_toPages);


        $devices = [ 
            'isDesktop'=>'Desktop Computer',   
            'isMobile'=>'Mobile Device', 
            'isTablet'=>'Tablet Device', 
            ];               
        View::share('devices',$devices);


    $select_devices = '<div '.$tooltip.'"'.__('AA.Activate or deactivate').'" class="faq-wrap"><div id="accordion"><div class="card">
                            <div class="card-header">
                                <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#devices">
                                    '.__('AA.Devices').' <i class="icon-copy fa fa-desktop" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="devices" class="collapse" data-parent="#accordion">
                            <h6 class="pl-10">'.__('AA.Select devices to allow this Notification to be displayed on').'</h6><hr>
                                <div class="card-body"><div class="container timeline row"><ul style="width:100%;">';

        foreach($devices as $name=>$title){
            $select_devices.='<li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">'.__('AA.'.$name.'').' </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9"> 
                      <h5 class="mb-10 h4">'.__('AA.'.$title.'').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="'.$name.'" type="hidden" value="inActive" required>
                        <input type="checkbox" name="'.$name.'" 
                        value="Active"  checked
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>';
        }

    $select_devices.='</ul></div></div>
                            </div>
                        </div></div></div>';
    View::share('select_devices',$select_devices);


        $systems = [ 
            'isWindows'=>'windows operating system',  
            'isLinux'=>'linux based operating system', 
            'isMac'=>'iOS or Mac based operating system', 
            'isAndroid'=>'Android operating system', 
            ];               
        View::share('systems',$systems);


    $select_systems = '<div '.$tooltip.'"'.__('AA.Activate or deactivate').'" class="faq-wrap"><div id="accordion"><div class="card">
                            <div class="card-header">
                                <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#systems">
                                    '.__('AA.Systems').' <i class="icon-copy fa fa-apple" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="systems" class="collapse" data-parent="#accordion">
                            <h6 class="pl-10">'.__('AA.Select systems to allow this Notification to be displayed on').'</h6><hr>
                                <div class="card-body"><div class="container timeline row"><ul style="width:100%;">';

        foreach($systems as $name=>$title){
            $select_systems.='<li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">'.__('AA.'.$name.'').' </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9"> 
                      <h5 class="mb-10 h4">'.__('AA.'.$title.'').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="'.$name.'" type="hidden" value="inActive" required>
                        <input type="checkbox" name="'.$name.'" 
                        value="Active"  checked
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>';
        }

    $select_systems.='</ul></div></div>
                            </div>
                        </div></div></div>';
    View::share('select_systems',$select_systems);




        $browsers = [ 
            'isChrome'=>'chrome browser',  
            'isFirefox'=>'firefox browser', 
            'isOpera'=>'opera browser', 
            'isSafari'=>'safari browser', 
            'isIE'=>'Checks if the browser is an some kind of Internet Explorer',  
            'isEdge'=>'microsoft edge browser', 
            'isInApp'=>'Check for browsers rendered inside applications like android webview', 
            ];               
        View::share('browsers',$browsers);

    $select_browsers = '<div '.$tooltip.'"'.__('AA.Activate or deactivate').'" class="faq-wrap"><div id="accordion"><div class="card">
                            <div class="card-header">
                                <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#browsers">
                                    '.__('AA.Browsers').' <i class="icon-copy fa fa-chrome" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="browsers" class="collapse" data-parent="#accordion">
                            <h6 class="pl-10">'.__('AA.Select browsers to allow this Notification to be displayed on').'</h6><hr>
                                <div class="card-body"><div class="container timeline row"><ul style="width:100%;">';

        foreach($browsers as $name=>$title){
            $select_browsers.='<li style="padding-bottom:0px;padding-top:10px;">
            <div class="timeline-date">'.__('AA.'.$name.'').' </div>
            <div class="timeline-desc card-box">
                <div class="pd-10 row">
                    <div class="col-md-9"> 
                      <h5 class="mb-10 h4">'.__('AA.'.$title.'').'</h5>
                    </div>
                    <div class="col-md-3">
                     <input name="'.$name.'" type="hidden" value="inActive" required>
                        <input type="checkbox" name="'.$name.'" 
                        value="Active"  checked
                        class="switch-btn" data-color="#13e643" data-secondary-color="red">
                     </div> 
                </div>
            </div>
        </li>';
        }

    $select_browsers.='</ul></div></div>
                            </div>
                        </div></div></div>';
    View::share('select_browsers',$select_browsers);


    $select_theme_user = '<h3>'.__('AA.It will be set up automatically').'</h3><br>
     <li>Models/[name].php</li><hr>
     <li>app/Http/Controllers/Features/nameController.php</li><hr>
     <li>database/migrations/create_[name]_table.php</li><hr>
     <li>resources/views/themes/admin/[theme-name]/features/[name].blade.php</li><hr>
     <li>resources/views/themes/user/[theme-name]/[name]/add.blade.php</li><hr>
     <li>resources/views/themes/user/[theme-name]/[name]/edit.blade.php</li><hr>
     <li>resources/views/themes/user/[theme-name]/[name]/index.blade.php</li><hr>
     <li>resources/views/themes/user/[theme-name]/[name]/view.blade.php</li><hr>
     <li>resources/views/themes/user/[theme-name]/[name]/manage.blade.php</li><hr>
     <li>'.__('AA.On ads page he adds Desktop & Tablet & Mobile').'</li><hr> 
     <li>'.__('AA.On notifications page, add an option to display notification on this page').'</li><hr> 
     <li>'.__('AA.On categories page this page will be merged. Where you can create categories').'</li><hr> 
     <li>'.__('AA.On sub categories page this page will be merged. Where you can create sub categories').'</li><hr>  
     <br>
    <a style="padding: 10px;color: #1b00ff;" style="padding: 10px;color: #1b00ff;" href="'.(env('APP_URL')).'/admin/themes" target="_blank">'. __('AA.Themes Page').'</a><div class="form-group"style="width:100%;"><leble>'.__('AA.For User Theme').'</leble>
    <select class="custom-select2 form-control" name="user" style="width: 100%; height: 38px;">';

        foreach($generals as $general){
          if($general->group=="themes")
            if($general->theme_to=="User")
            $select_theme_user.='<option value="'.$general->theme_name.'">'.$general->theme_name.'</option>';
        }
 
    $select_theme_user.='</select></div>';
 
    View::share('select_theme_user',$select_theme_user);


    $select_theme_admin = '<div class="form-group"style="width:100%;"><leble>'.__('AA.For Admin Theme').'</leble>
    <select class="custom-select2 form-control" name="admin" style="width: 100%; height: 38px;">';

        foreach($generals as $general){
          if($general->group=="themes")
            if($general->theme_to=="Admin")
            $select_theme_admin.='<option value="'.$general->theme_name.'">'.$general->theme_name.'</option>';
        }
 
    $select_theme_admin.='</select></div>';
 
    View::share('select_theme_admin',$select_theme_admin);



//-----------------------Plus
$onilne_users = Active::users()->count(); 
View::share('onilne_users',$onilne_users);

$onilne_guests = Active::guests()->count(); 
View::share('onilne_guests',$onilne_guests);

$lastUsers = Active::usersWithinHours(1)->get();
View::share('lastUsers',$lastUsers);

$users10 = Active::usersWithinMinutes(10)->get();
View::share('users10',$users10);

$mostUsers = Active::users()->mostRecent()->get();
View::share('mostUsers',$mostUsers);

$titles = str_replace('/', ' ', Request()->path());
View::share('titles',$titles);

$rout = str_replace('admin/', '', Request()->path());
View::share('rout',$rout);

$admin_title = str_replace('_', ' ', $rout);
View::share('admin_title',$admin_title);
//-----------------------End Plus


    if(str_contains(url()->current(), '/admin/route')){
      $routes = ' '.$select_theme_user.' '.$select_theme_admin.'
      '.$admin["add"]["route"]["icon"].'
      '.$admin["add"]["route"]["name"].'
      ';
       View::share('routes',$routes);
    }

    if(str_contains(url()->current(), '/admin/ages')){
      $ages = ''.$select_lang.''.$admin["add"]["user"]["age"].'';
       View::share('ages',$ages);
    }

    if(str_contains(url()->current(), '/admin/designs')){
      $designs = ''.$select_lang.''.$admin["add"]["design"]["color"].'';
       View::share('designs',$designs);
    }

    if(str_contains(url()->current(), '/admin/genders')){
      $genders = ''.$select_lang.''.$admin["add"]["user"]["gender"].'';
       View::share('genders',$genders);
    }

 

    if(str_contains(url()->current(), '/admin/languages')){

         $form_lang = [
            'name'=>'">',
            'language'=>'">', 
            'flag'=>');"></div></div></div>', 
            ];               
        View::share('form_lang',$form_lang);

        $form_add_language = [
            'name'=>'',
            'url'=>'', 
            'rtl'=>'', 
            'flag'=>'', 
            ];               
        View::share('form_add_language',$form_add_language);  

    $languages = ''.$admin["form"].'';

        foreach($form_add_language as $name=>$end){
            $languages.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["lang"]["$name"].' '.$admin["close"].' ';
        }

    $languages.=''.$admin["eform"].'';

    View::share('languages',$languages);
    }


    if(str_contains(url()->current(), '/admin/users')){
        $form_user = [
            'name'=>'">',
            'last_name'=>'">', 
            'age'=>'">', 
            'gender'=>'">', 
            'favorite_design'=>'">', 
            'username'=>'">', 
            ];               
        View::share('form_user',$form_user);  


    $users = ''.$no_add_users.'';
    View::share('users',$users);
    }


    if(str_contains(url()->current(), '/admin/ads')){
        $form_add_ads = [
            'name'=>'',
            'title'=>'', 
            'description'=>'', 
            'sponsored'=>'', 
            'image_promo'=>'', 
            //'start_date'=>'', 
            //'end_date'=>'', 
            'link'=>'', 
            ];               
        View::share('form_add_ads',$form_add_ads);  


    $ads = ''.$select_lang.''.$select_toPages.''.$admin["form"].'';

        foreach($form_add_ads as $name=>$end){
            $ads.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["ads"]["$name"].' '.$admin["close"].' ';
        }

    $ads.=''.$admin["eform"].'';

    View::share('ads',$ads);
    }


    if(str_contains(url()->current(), '/admin/notifications')){
        $form_add_noti = [      
            'noti_user'=>'',
            'noti_guest'=>'', 
            'cookies_name'=>'',
            'title'=>'', 
            'link'=>'', 
            'message'=>'', 
            //'start_date'=>'', 
            //'end_date'=>'', 
            'seconds'=>'',
            'color'=>'', 
            'background_color'=>'', 
            'icon'=>'',
            'position'=>'', 
            ];               
        View::share('form_add_noti',$form_add_noti);  

    $notifications = ''.$select_devices.''.$select_systems.''.$select_toPages.''.$select_browsers.''.$select_lang.''.$admin["form"].'';

        foreach($form_add_noti as $name=>$end){
            $notifications.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["notification"]["$name"].' '.$admin["close"].' ';
        }

    $notifications.=''.$admin["eform"].'';

    View::share('notifications',$notifications);
    }


   if(str_contains(url()->current(), '/admin/siteicons')){
        $form_add_icon = [
            'icon'=>'', 
            ];               
        View::share('form_add_icon',$form_add_icon);  

    $siteicons = ''.$select_lang.' '.$admin["form"].'';

        foreach($form_add_icon as $name=>$end){
           $siteicons.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["siteicon"]["$name"].' '.$admin["close"].' ';
        }

    $siteicons.=''.$admin["eform"].'';

    View::share('siteicons',$siteicons);
    }


    if(str_contains(url()->current(), '/admin/latest_updates')){
        $form_latest_updates = [
            'help_content',     
            ];               
        View::share('form_latest_updates',$form_latest_updates);  

    $latest_updates = ''.$select_lang.''.$admin["form"].'';

        foreach($form_latest_updates as $name){
            $latest_updates.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["latest_update"]["$name"].' '.$admin["close"].' ';
        }

    $latest_updates.=''.$admin["eform"].'';

    View::share('latest_updates',$latest_updates);
    }

    if(str_contains(url()->current(), '/admin/categorys')){
        $form_add_category = [
            'adult'=>'',    
            'name'=>'',
            'iconsvg'=>'',
            'icon'=>'',
            'color'=>'', 
            'background_color'=>'', 
            'seo_title'=>'', 
            'seo_keywords'=>'', 
            'seo_description'=>'', 
            ];               
        View::share('form_add_category',$form_add_category);  

    $categorys = ''.$select_lang.''.$select_features.''.$admin["form"].'';

        foreach($form_add_category as $name=>$end){
            $categorys.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["category"]["$name"].' '.$admin["close"].' ';
        }

    $categorys.=''.$admin["eform"].'';

    View::share('categorys',$categorys);
    }


    $select_category = '<label>'. __('AA.Category').'</label>
    <select class="custom-select2 form-control" name="category_id" style="width: 100%; height: 38px;">';

        foreach($get_categorys as $c){
              if($c->status=="Active")
            $select_category.='<option value="'.$c->id.'">'.$c->name.'</option>';
        }

    $select_category.='</select>';

    View::share('select_category',$select_category);



    if(str_contains(url()->current(), '/admin/sub_categorys')){

    $select_photos_categorys = '<div  class="faq-wrap"><div id="accordion"><div class="card">
     <div class="card-header">
          <a class="btn btn-block collapsed" data-toggle="collapse" data-target="#category">
              '.__('AA.select category').' <i class="icon-copy fa fa-" aria-hidden="true"></i>
          </a>
     </div>
     
        <div id="category" class="collapse" data-parent="#accordion">
            <div class="select-role">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">';
    foreach($get_routes as $route){
        if($route->for=="User") 
        foreach($get_categorys as $category){
            if($category->to==$route->name)
            $select_photos_categorys.='<label style="margin-top: 20px;height: 100px;" class="btn">
                        <input type="radio" name="category_id" value="'.$category->id.'" >
                         <img width="45" height="45" src="'.(env('APP_URL')).'/icons/categorys/'.$category->iconsvg.'">
                         '.$category->name.' ('.$route->name.')
                    </label>';
        }
     }

    $select_photos_categorys.='</div>
            </div>
        </div></div></div>

    </div>';
    View::share('select_photos_categorys',$select_photos_categorys);


      $select_noti = ''.__('AA.Categorys  ( Select the category in which you want to place the subcategory according to each feature, Please do not select more than 1 category)').'<hr>';

        $form_add_category = [
            'adult'=>'',    
            'name'=>'',
            'iconsvg'=>'',         
            'icon'=>'',
            'color'=>'', 
            'background_color'=>'', 
            'seo_title'=>'', 
            'seo_keywords'=>'', 
            'seo_description'=>'', 
            ];                
        View::share('form_add_category',$form_add_category);  

    $sub_categorys = '
    '.$select_lang.'
    '.$select_noti.'
    '.$select_photos_categorys.'
    '.$admin["form"].'';

        foreach($form_add_category as $name=>$end){
            $sub_categorys.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["category"]["$name"].' '.$admin["close"].' ';
        }

    $sub_categorys.=''.$admin["eform"].'';

    View::share('sub_categorys',$sub_categorys);
    }



    if(str_contains(url()->current(), '/admin/custom_codes')){
        $form_add_code = [
            'name'=>'',
            'code'=>'', 
            'code_typ'=>'', 
            ];               
        View::share('form_add_code',$form_add_code);  

    $custom_codes = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_code as $name=>$end){
            $custom_codes.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["code"]["$name"].' '.$admin["close"].' ';
        }

    $custom_codes.=''.$admin["eform"].'';

    View::share('custom_codes',$custom_codes);
    }


    if(str_contains(url()->current(), '/admin/analytics')){
        $form_add_analytic = [
            'name'=>'',
            'code'=>'', 
            ];               
        View::share('form_add_analytic',$form_add_analytic); 

    $analytics = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_analytic as $name=>$end){
            $analytics.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["analytic"]["$name"].' '.$admin["close"].' ';
        }

    $analytics.=''.$admin["eform"].'';

    View::share('analytics',$analytics);
    }


    if(str_contains(url()->current(), '/admin/faqs')){
        $form_add_faq = [
            'question'=>'',
            'answer'=>'', 
            ];               
        View::share('form_add_faq',$form_add_faq); 

    $faqs = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_faq as $name=>$end){
            $faqs.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["faq"]["$name"].' '.$admin["close"].' ';
        }

    $faqs.=''.$admin["eform"].'';

    View::share('faqs',$faqs);
    }


    if(str_contains(url()->current(), '/admin/pages')){
        $form_add_page = [
            'page_name'=>'',
            'page_content'=>'',
            'page_seo_title'=>'',
            'page_seo_keywords'=>'',
            'page_seo_description'=>'',
            ];               
        View::share('form_add_page',$form_add_page); 

    $pages = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_page as $name=>$end){
            $pages.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["page"]["$name"].' '.$admin["close"].' ';
        }

    $pages.=''.$admin["eform"].'';

    View::share('pages',$pages);
    }


    if(str_contains(url()->current(), '/admin/help_page')){
        $form_add_help = [
            'title'=>'',
            'content'=>'',
            ];               
        View::share('form_add_help',$form_add_help); 

    $help_page = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_help as $name=>$end){
            $help_page.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["help"]["$name"].' '.$admin["close"].' ';
        }

    $help_page.=''.$admin["eform"].'';

    View::share('help_page',$help_page);
    }


    if(str_contains(url()->current(), '/admin/social_login')){
        $form_add_sys_login = [
            'client_id'=>'', 
            'client_secret'=>'',
            ];               
        View::share('form_add_sys_login',$form_add_sys_login); 

    $social_login = ''.$select_sys_login.''.$select_lang.''.$admin["form"].'';

        foreach($form_add_sys_login as $name=>$end){
            $social_login.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["social_login"]["$name"].' '.$admin["close"].' ';
        }

    $social_login.=''.$admin["eform"].'';

    View::share('social_login',$social_login);
    }

    if(str_contains(url()->current(), '/admin/social_links')){
        $form_add_social_link = [
            'name'=>'',
            'icon'=>'',
            'link'=>'',
            ];               
        View::share('form_add_social_link',$form_add_social_link); 

    $social_links = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_social_link as $name=>$end){
            $social_links.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["social_link"]["$name"].' '.$admin["close"].' ';
        }

    $social_links.=''.$admin["eform"].'';

    View::share('social_links',$social_links);
    }

    if(str_contains(url()->current(), '/admin/themes')){
        $form_add_theme = [
            'name'=>'',
            'version'=>'',
            'auther'=>'',
            'description'=>'',
            'theme_to'=>'',
            'theme_image'=>'',
            ];               
        View::share('form_add_theme',$form_add_theme); 

    $themes = ''.$select_lang.''.$admin["form"].'';

        foreach($form_add_theme as $name=>$end){
            $themes.=''.$admin["open"].' '.__('AA.'.$name.'').' 
            '.$admin["and"].'
            '.$admin["add"]["theme"]["$name"].' '.$admin["close"].' ';
        }

    $themes.=''.$admin["eform"].'';

    View::share('themes',$themes);
    }


    $select_gender = '<label>'. __('AA.Gender').'</label>
    <select class="custom-select2 form-control" name="name" style="width: 100%; height: 38px;">';

        foreach($generals as $gender){
            if($gender->group=="genders")
                if($gender->status=="Active")
            $select_gender.='<option value="'.$gender->name.'">'.$gender->name.'</option>';
        }

    $select_gender.='</select>';

    View::share('select_gender',$select_gender);



    $select_age = '<label>'. __('AA.Age').'</label>
    <select class="custom-select2 form-control" name="name" style="width: 100%; height: 38px;">';

        foreach($generals as $age){
            if($age->group=="ages")
                if($age->status=="Active")
            $select_age.='<option value="'.$age->name.'">'.$age->name.'</option>';
        }

    $select_age.='</select>';

    View::share('select_age',$select_age);

 

if(str_contains(url()->current(), '/admin')){



$entrdata_catg = '<a class="btn btn-warning b-up b-3d" href="#" role="button" data-toggle="collapse" data-target="#entrdata"><i class="icon-copy dw dw-startup"></i> 
                  '. __('AA.Quick entry').'
                    </a>
                    <div id="entrdata" class="collapse" data-parent="#accordion">
                        <div style="margin-top:20px">
                          '. __('AA.You can add 23 category to each feature with the click of a button').'<hr>
                          <a class="btn btn-warning b-up b-3d" href="'.(env('APP_URL')).'/admin/enter/categorys"><i class="icon-copy dw dw-startup"></i> 
                          '. __('AA.Start').'
                            </a>
                        </div>
                    </div>';
        View::share('entrdata_catg',$entrdata_catg);  
         
$entrdata_sub_catg = '<a class="btn btn-warning b-up b-3d" href="#" role="button" data-toggle="collapse" data-target="#entrdatasub"><i class="icon-copy dw dw-startup"></i>
                  '. __('AA.Quick entry').'
                    </a>
                    <div id="entrdatasub" class="collapse" data-parent="#accordion">
                        <div style="margin-top:20px">
                          '. __('AA.You can enter subcategory 1 in each category according to each feature, it will be named (all)').'<hr>
                          <a class="btn btn-danger b-up b-3d" href="'.(env('APP_URL')).'/admin/enter/sub/categorys"><i class="icon-copy dw dw-startup"></i> 
                          '. __('AA.Start').'
                            </a>
                        </div>
                    </div>';
        View::share('entrdata_sub_catg',$entrdata_sub_catg);

}



$alertmessage = '<script>
 var Alert=void 0;!function(n){var e,t,a,i,r,s;i=function(n,t,a){return e("info",n,t,"fa fa-info-circle",a)},s=function(n,t,a){return e("warning",n,t,"fa fa-warning",a)},t=function(n,t,a){return e("error",n,t,"fa fa-exclamation-circle",a)},a=function(n,t,a){return e("trash",n,t,"fa fa-trash-o",a)},r=function(n,t,a){return e("success","","{{ __(\'AA.successfully\')}}","fa fa-check-circle",a)},e=function(e,t,a,i,r){var s,o,d,l,c,u;function f(){s.removeClass("open"),s.one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){return s.remove()})}return void 0===r&&(r={}),r=$.extend({},n.defaults,r),u||0===(u=$("#alerts")).length&&(u=$("<ul>").attr("id","alerts").appendTo($("body"))),r.width&&u.css({width:r.width}),s=$("<li>").addClass("alert").addClass("alert-"+e),setTimeout(function(){s.addClass("open")},1),i&&(l=$("<i>").addClass(i),s.append(l)),c=$("<div>").addClass("alert-block"),s.append(c),a&&(d=$("<div>").addClass("alert-title").append(a),c.append(d)),t&&(o=$("<div>").addClass("alert-message").append(t),c.append(o)),r.displayDuration>0?setTimeout(function(){f()},r.displayDuration):c.append("<em>Click to Dismiss</em>"),s.on("click",function(){f()}),u.prepend(s)},n.defaults={width:"",icon:"",displayDuration:3e3,pos:""},n.info=i,n.warning=s,n.error=t,n.trash=a,n.success=r}(Alert||(Alert={})),this.Alert=Alert,$("#test").on("click",function(){Alert.info("Message")});
</script>';
        View::share('alertmessage',$alertmessage);



$hidden_sidepar = '@media (max-width:767px){.h-sm{display:none!important}}@media (min-width:768px) and (max-width:1199px){.h-md,.navbar-expand-md .h-expand{display:none!important}}@media (min-width:1230px){.h-lg,.navbar-expand-lg .h-expand{display:none!important}}@media (min-width:1600px){.h-xl{display:none!important}}@media (max-width:767px){.back-sm{background:#fff!important}}@media (min-width:768px) and (max-width:1199px){.back-md,.navbar-expand-md .h-expand{background:#fff!important}}@media (min-width:1230px){.back-lg,.navbar-expand-lg .h-expand{height:0!important;background:#fff0!important}}@media (min-width:1600px){.back-xl{height:0!important;background:#fff0!important}';
        View::share('hidden_sidepar',$hidden_sidepar);


$RTL = 'h1,h2,h3,h4,h5,h6{text-align:right!important}.left-side-bar{right:0!important}.timeline .timeline-date{text-align:right right: 0!important}.weight-500{width:100%!important}.padding-bottom-30{width:100%!important}.main-container{padding:90px 290px 20px 90px!important;padding-left:25px!important}.header{width:calc(100% - 0px)!important}div.dataTables_wrapper div.dataTables_filter label{text-align:right!important;margin-top:10px!important}.sidebar-menu .dropdown-toggle{text-align:right!important}.btn{float:left!important;text-align:right!important}.select2-results__option[aria-selected]{text-align:right!important}table.dataTable{text-align:right!important}.sidebar-menu .dropdown-toggle:after{right:150px!important}.modal-header .close{padding:5px!important;margin:0!important}.card-box,.da-card{text-align:right!important}.dropdown-menu-icon-list .dropdown-item{text-align:right!important}.form-group{text-align:right!important}.sidebar-menu .submenu li a{text-align:right!important}.nav.vtabs .nav-link{text-align:right!important}';
        View::share('RTL',$RTL);
 

//------------GEO
$geoip = new \Victorybiz\GeoIPLocation\GeoIPLocation();


$getIP = $geoip->getIP(); // Return client IP
$getCity = $geoip->getCity(); // Return client IP City (null if none)
$getRegion = $geoip->getRegion(); // Return client IP Region (null if none)
$getRegionCode = $geoip->getRegionCode(); // Return client IP Region Code (null if none)
$getCountry = $geoip->getCountry(); // Return client IP Country
$getCountryCode = $geoip->getCountryCode(); // Return client IP Country Code
$getContinent = $geoip->getContinent(); // Return client IP Continent 
$getContinentCode = $geoip->getContinentCode(); // Return client IP Continent Code
$getPostalCode = $geoip->getPostalCode(); // Return client IP Postal Code (null if none)
$getLatitude = $geoip->getLatitude(); // Return client IP Latitude (null if none)
$getLongitude = $geoip->getLongitude(); // Return client IP Longitude (null if none)
$getCurrencyCode = $geoip->getCurrencyCode(); // Return client IP Country Currency Code (null if none)
$getCurrencySymbol = $geoip->getCurrencySymbol(); // Return client IP Country Currency Symbol (null if none)
$getCurrencyExchangeRate = $geoip->getCurrencyExchangeRate(); // Return client IP Country Currency Exchange Rate against NGN (null if none)
$getLocation = $geoip->getLocation(); // Return client IP Location string (city, region, country)

$UserInfoGeo = '
<input type="hidden" value="'.$getIP.'" name="getIP" required>
<input type="hidden" value="'.$getCity.'" name="getCity" required>
<input type="hidden" value="'.$getRegion.'" name="getRegion" required>
<input type="hidden" value="'.$getRegionCode.'" name="getRegionCode" required>
<input type="hidden" value="'.$getCountry.'" name="getCountry" required>
<input type="hidden" value="'.$getCountryCode.'" name="getCountryCode" required>
<input type="hidden" value="'.$getContinent.'" name="getContinent" required>
<input type="hidden" value="'.$getContinentCode.'" name="getContinentCode" required>
<input type="hidden" value="'.$getPostalCode.'" name="getPostalCode" required>
<input type="hidden" value="'.$getLatitude.'" name="getLatitude" required>
<input type="hidden" value="'.$getLongitude.'" name="getLongitude" required>
<input type="hidden" value="'.$getCurrencyCode.'" name="getCurrencyCode" required>
<input type="hidden" value="'.$getCurrencySymbol.'" name="getCurrencySymbol" required>
<input type="hidden" value="'.$getCurrencyExchangeRate.'" name="getCurrencyExchangeRate" required>
<input type="hidden" value="'.$getLocation.'" name="getLocation" required>
';
View::share('UserInfoGeo',$UserInfoGeo);
 //------------end GEO


        $database_geo = [  
            'getIP'=>'IP',
            'getCity'=>'City',
            'getRegion'=>'Region',
            'getRegionCode'=>'Region Code',             
            'getCountry'=>'Country', 
            'getCountryCode'=>'Country Code',
            'getContinent'=>'Continent',
            'getContinentCode'=>'Continent Code',
            'getPostalCode'=>'Postal Code',             
            'getLatitude'=>'Latitude', 
            'getLongitude'=>'Longitude',
            'getCurrencyCode'=>'Country Currency Code',
            'getCurrencySymbol'=>'Country Currency Symbol',
            'getCurrencyExchangeRate'=>'Country Currency Exchange Rate against NGN',             
            'getLocation'=>'Location',                                    
            ];                
        View::share('database_geo',$database_geo);


        $documentation_list = [
            'Important', 
            'SEO',   
            'Date',     
            'Message',
            'Template', 
            'reCAPTCHA', 
            'Production',                                                                  
            ];                
        View::share('documentation_list',$documentation_list);


        $documentation_user = [ 
            'name',  
            'last_name', 
            'email', 
            'age', 
            'gender', 
            'local', 
            'favorite_design',  
            'username', 
            'role',  
            'getIP',
            'getCity',
            'getRegion',
            'getRegionCode',
            'getCountry',
            'getCountryCode',
            'getContinent',
            'getContinentCode',
            'getPostalCode',
            'getLatitude',
            'getLongitude',
            'getCurrencyCode',
            'getCurrencySymbol',
            'getCurrencyExchangeRate',
            'getLocation',
            ];               
        View::share('documentation_user',$documentation_user);

        $documentation_category = [ 
            'name',  
            'local',            
            'to', 
            'adult',
            'icon',            
            'color', 
            'background_color',  
            'seo_title', 
            'seo_keywords', 
            'seo_description',
            'status',        
            ];               
        View::share('documentation_category',$documentation_category);


        $documentation_langs = [ 
            'name',  
            'language',    
            'status',                      
            'rtl',       
            'user_id',

            'site_name',  
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

//---------- Upload System
            'maxFilesize',    
            'maxFiles',                      
            'retryChunksLimit', 
            'forceChunking',
            'retryChunks',  
//---------- select  theme
            'theme_admin',                      
            'theme_user', 

//---------- maintenances
            'maintenances_title',    
            'maintenances_message',                      
            'maintenances_opens', 
//---------- cookies
            'cookies_name',
            'cookies_title',  
            'cookies_message',
//---------- comments
            'comments_facebook',                      
            'comments_disqus',
//---------- contact
            'contact_mail',
            'contact_noti', 
//---------- company
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
//---------- error
            'error_400',  
            'error_403',
            'error_404',  
            'error_500',    
            'error_503',  
//---------- not found
            'not_found_title',                      
            'not_found_description', 
//---------- advertise
            'advertise_mail',  
            'advertise_price',    
            'advertise_title',                      
            'advertise_message', 
//---------- login
            'login_title',
            'login_description',  
            'login_keywords',    
//---------- register
            'register_title', 
            'register_description',
            'register_keywords',                      
//---------- crawler bot
            'crawler_Bot', 
//---------- browsers
            'isChrome',
            'isFirefox',  
            'isOpera',    
            'isSafari',                      
            'isIE', 
            'isEdge',  
            'isInApp',  
//---------- devices
            'isDesktop',                      
            'isMobile', 
            'isTablet',
//---------- systems
            'isWindows',                      
            'isLinux', 
            'isMac',
            'isAndroid',                      
            ];               
        View::share('documentation_langs',$documentation_langs);

        $documentation_ads = [ 
            'ads_name', 
            'ads_title', 
            'ads_description',  
            'ads_sponsored',     
            //'ads_start_date', 
            //'ads_end_date', 
            'ads_link',
            'ads_image_promo',                  
            ];               
        View::share('documentation_ads',$documentation_ads);


        $documentation_notifications = [ 
            'noti_cookies_name', 
            'noti_title',  
            'noti_link', 
            'noti_message', 
            //'noti_start_date', 
            //'noti_end_date',  
            'noti_seconds', 
            'noti_color', 
            'noti_background_color', 
            'noti_position',  
            'noti_icon',
            'noti_user', 
            'noti_guest',       
            ];               
        View::share('documentation_notifications',$documentation_notifications);


        $documentation_help = [ 
            'help_title', 
            'help_content',       
            ];               
        View::share('documentation_help',$documentation_help);


        $documentation_themes = [ 
            'theme_name', 
            'theme_version', 
            'theme_auther', 
            'theme_to',  
            'theme_description',
            'theme_image',           
            ];               
        View::share('documentation_themes',$documentation_themes);






//----------------------------------------------end admin