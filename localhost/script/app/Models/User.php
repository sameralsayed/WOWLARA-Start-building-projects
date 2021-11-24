<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    
    //use \HighIdeas\UsersOnline\Traits\UsersOnlineTrait;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',     
        'age',
        'gender',
        'local',
        'favorite_design',
        'username',
        'role', 
        'email',  
        'password',   
        'photo', 
        'background',       
        //links
        'facebook',
        'twitter', 
        'pinterest',       
        'instagram',
        'tiktok',
        'youtube',
        'status',
        'verified',
        //login
        'facebook_id',
        'google_id',
        'microsoft_id',
        'apple_id',
        'dailymotion_id',
        'deviantart_id',
        'dribbble_id',
        'flattr_id',
        'flickr_id',
        'foursquare_id',
        'github_id',
        'imgur_id',
        'instagram_id',
        'kakao_id',
        'line_id',
        'medium_id',
        'meetup_id',
        'azure_id',
        'naver_id',
        'odnoklassniki_id',
        'pinterest_id',
        'pixnet_id',
        'pushbullet_id',
        'reddit_id',
        'snapchat_id',
        'stackexchange_id',
        'tumblr_id',
        'vimeo_id',
        'vkontakte_id',
        'weibo_id',
        'wordpress_id',
        'yahoo_id',
        'yammer_id',
        'yandex_id',
        'youtube_id',
        'battlenet_id',
        'discord_id',
        'smashcast_id',
        'steam_id',
        'twitch_id',
        'coursera_id',
        'goodreads_id',
        'headhunter_id',
        'stocktwits_id',
        'xing_id',
        'asana_id',
        'aweber_id',
        'bitly_id',
        'bitbucket_id',
        'box_id',
        'cheddar_id',
        'constantcontact_id',
        'digitalocean_id',
        'disqus_id',
        'dropbox_id',
        'envato_id',
        'etsy_id',
        'eventbrite_id',
        'eyeem_id',
        'harvest_id',
        'heroku_id',
        'hubspot_id',
        'linkedin_id',
        'mailchimp_id',
        'mailru_id',
        'mattermost_id',
        'podio_id',
        'quickbooks_id',
        'readability_id',
        'SalesForce_id',
        'sharepoint_id',
        'shopify_id',
        'teamleader_id',
        'teamweek_id',
        'trello_id',
        'unsplash_id',
        'versionone_id',
        'whmcs_id',
        'zendesk_id',
        'zoho_id',
        'zoom_id',
        'uclapi_id',
        'binance_id',
        'coinbase_id',
        'gumroad_id',
        'mollie_id',
        'patreon_id',
        'paypal_id',
        'redbooth_id',
        'stripe_id',
        'venmo_id',
        'deezer_id',
        'discogs_id',
        'mixcloud_id',
        'soundcloud_id',
        'spotify_id',
        'admitad_id',
        'angellist_id',
        'douban_id',
        'fablabs_id',
        'fitbit_id',
        'flexkids_id',
        'strava_id',
        'trakt_id',
        'tvshowtime_id',
        'uber_id',
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
        'getLocation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];  

    public function verifys()
    {
        return $this->hasMany('App\Models\Verify');
    }

    public function reports()
    {
        return $this->hasMany('App\Models\Report');
    }

    public function saves()
    {
        return $this->hasMany('App\Models\Save');
    }
    
    public function likes()
    {
        return $this->hasMany('App\Models\Like');
    }

    public function shares()
    {
        return $this->hasMany('App\Models\Share');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function downloads()
    {
        return $this->hasMany('App\Models\Download');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    } 

}
