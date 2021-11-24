<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\\Microsoft\\MicrosoftExtendSocialite@handle',
        'SocialiteProviders\\Apple\\AppleExtendSocialite@handle',
        'SocialiteProviders\\Dailymotion\\DailymotionExtendSocialite@handle',
        'SocialiteProviders\\Deviantart\\DeviantartExtendSocialite@handle',
        'SocialiteProviders\\Dribbble\\DribbbleExtendSocialite@handle',
        'SocialiteProviders\\Flattr\\FlattrExtendSocialite@handle',
        'SocialiteProviders\\Flickr\\FlickrExtendSocialite@handle',
        'SocialiteProviders\\Foursquare\\FoursquareExtendSocialite@handle',
        'SocialiteProviders\\GitHub\\GitHubExtendSocialite@handle',
        'SocialiteProviders\\Imgur\\ImgurExtendSocialite@handle',
        'SocialiteProviders\\Instagram\\InstagramExtendSocialite@handle',
        'SocialiteProviders\\Kakao\\KakaoExtendSocialite@handle', 
        'SocialiteProviders\\Line\\LineExtendSocialite@handle',
        'SocialiteProviders\\Medium\\MediumExtendSocialite@handle',
        'SocialiteProviders\\Meetup\\MeetupExtendSocialite@handle',
        'SocialiteProviders\\Azure\\AzureExtendSocialite@handle',
        'SocialiteProviders\\Naver\\NaverExtendSocialite@handle',
        'SocialiteProviders\\Odnoklassniki\\OdnoklassnikiExtendSocialite@handle',
        'SocialiteProviders\\Pinterest\\PinterestExtendSocialite@handle',
        'SocialiteProviders\\Pixnet\\PixnetExtendSocialite@handle',
        'SocialiteProviders\\Pushbullet\\PushbulletExtendSocialite@handle',
        'SocialiteProviders\\Reddit\\RedditExtendSocialite@handle',
        'SocialiteProviders\\Snapchat\\SnapchatExtendSocialite@handle',
        'SocialiteProviders\\StackExchange\\StackExchangeExtendSocialite@handle',
        'SocialiteProviders\\Tumblr\\TumblrExtendSocialite@handle',
        'SocialiteProviders\\Vimeo\\VimeoExtendSocialite@handle',
        'SocialiteProviders\\VKontakte\\VKontakteExtendSocialite@handle',
        'SocialiteProviders\\Weibo\\WeiboExtendSocialite@handle',
        'SocialiteProviders\\WordPress\\WordPressExtendSocialite@handle',
        'SocialiteProviders\\Yahoo\\YahooExtendSocialite@handle',
        'SocialiteProviders\\Yammer\\YammerExtendSocialite@handle',
        'SocialiteProviders\\Yandex\\YandexExtendSocialite@handle',
        'SocialiteProviders\\YouTube\\YouTubeExtendSocialite@handle',
        'SocialiteProviders\\Battlenet\\BattlenetExtendSocialite@handle',
        'SocialiteProviders\\Discord\\DiscordExtendSocialite@handle',
        'SocialiteProviders\\Smashcast\\SmashcastExtendSocialite@handle',
        'SocialiteProviders\\Steam\\SteamExtendSocialite@handle',
        'SocialiteProviders\\Twitch\\TwitchExtendSocialite@handle',
        'SocialiteProviders\\Coursera\\CourseraExtendSocialite@handle',
        'SocialiteProviders\\Goodreads\\GoodreadsExtendSocialite@handle',
        'SocialiteProviders\\HeadHunter\\HeadHunterExtendSocialite@handle',
        'SocialiteProviders\\StockTwits\\StockTwitsExtendSocialite@handle',
        'SocialiteProviders\\Xing\\XingExtendSocialite@handle',
        'SocialiteProviders\\Asana\\AsanaExtendSocialite@handle',
        'SocialiteProviders\\Aweber\\AweberExtendSocialite@handle',
        'SocialiteProviders\\Bitly\\BitlyExtendSocialite@handle',
        'SocialiteProviders\\Bitbucket\\BitbucketExtendSocialite@handle',
        'SocialiteProviders\\Box\\BoxExtendSocialite@handle',
        'SocialiteProviders\\Cheddar\\CheddarExtendSocialite@handle',
        'SocialiteProviders\\ConstantContact\\ConstantContactExtendSocialite@handle',
        'SocialiteProviders\\DigitalOcean\\DigitalOceanExtendSocialite@handle',
        'SocialiteProviders\\Disqus\\DisqusExtendSocialite@handle',
        'SocialiteProviders\\Dropbox\\DropboxExtendSocialite@handle',
        'SocialiteProviders\\Envato\\EnvatoExtendSocialite@handle',
        'SocialiteProviders\\Etsy\\EtsyExtendSocialite@handle',
        'SocialiteProviders\\Eventbrite\\EventbriteExtendSocialite@handle',
        'SocialiteProviders\\EyeEm\\EyeEmExtendSocialite@handle',
        'SocialiteProviders\\Harvest\\HarvestExtendSocialite@handle',
        'SocialiteProviders\\Heroku\\HerokuExtendSocialite@handle',
        'SocialiteProviders\\HubSpot\\HubSpotExtendSocialite@handle',
        'SocialiteProviders\\LinkedIn\\LinkedInExtendSocialite@handle',
        'SocialiteProviders\\MailChimp\\MailChimpExtendSocialite@handle',
        'SocialiteProviders\\Mailru\\MailruExtendSocialite@handle',
        'SocialiteProviders\\Mattermost\\MattermostExtendSocialite@handle',
        'SocialiteProviders\\Podio\\PodioExtendSocialite@handle',
        'SocialiteProviders\\QuickBooks\\QuickBooksExtendSocialite@handle',
        'SocialiteProviders\\Readability\\ReadabilityExtendSocialite@handle',
        'SocialiteProviders\\SalesForce\\SalesForceExtendSocialite@handle',
        'SocialiteProviders\\SharePoint\\SharePointExtendSocialite@handle',
        'SocialiteProviders\\Shopify\\ShopifyExtendSocialite@handle',
        'SocialiteProviders\\Teamleader\\TeamleaderExtendSocialite@handle',
        'SocialiteProviders\\Teamweek\\TeamweekExtendSocialite@handle',
        'SocialiteProviders\\Trello\\TrelloExtendSocialite@handle',
        'SocialiteProviders\\Unsplash\\UnsplashExtendSocialite@handle',
        'SocialiteProviders\\VersionOne\\VersionOneExtendSocialite@handle',
        'SocialiteProviders\\Whmcs\\WhmcsExtendSocialite@handle',
        'SocialiteProviders\\Zendesk\\ZendeskExtendSocialite@handle',
        'SocialiteProviders\\Zoho\\ZohoExtendSocialite@handle',
        'SocialiteProviders\\Zoom\\ZoomExtendSocialite@handle',
        'SocialiteProviders\\UCL\\UCLExtendSocialite@handle',
        'SocialiteProviders\\Binance\\BinanceExtendSocialite@handle',
        'SocialiteProviders\\Coinbase\\CoinbaseExtendSocialite@handle',
        'SocialiteProviders\\Gumroad\\GumroadExtendSocialite@handle',
        'SocialiteProviders\\Mollie\\MollieExtendSocialite@handle',
        'SocialiteProviders\\Patreon\\PatreonExtendSocialite@handle',
        'SocialiteProviders\\PayPal\\PayPalExtendSocialite@handle',
        'SocialiteProviders\\Redbooth\\RedboothExtendSocialite@handle',
        'SocialiteProviders\\Stripe\\StripeExtendSocialite@handle',
        'SocialiteProviders\\Venmo\\VenmoExtendSocialite@handle',
        'SocialiteProviders\\Deezer\\DeezerExtendSocialite@handle',
        'SocialiteProviders\\Discogs\\DiscogsExtendSocialite@handle',
        'SocialiteProviders\\Mixcloud\\MixcloudExtendSocialite@handle',
        'SocialiteProviders\\SoundCloud\\SoundCloudExtendSocialite@handle',
        'SocialiteProviders\\Spotify\\SpotifyExtendSocialite@handle',
        'SocialiteProviders\\Admitad\\AdmitadExtendSocialite@handle',
        'SocialiteProviders\\AngelList\\AngelListExtendSocialite@handle',
        'SocialiteProviders\\Douban\\DoubanExtendSocialite@handle',
        'SocialiteProviders\\Fablabs\\FablabsExtendSocialite@handle',
        'SocialiteProviders\\Fitbit\\FitbitExtendSocialite@handle',
        'SocialiteProviders\\Flexkids\\FlexkidsExtendSocialite@handle',
        'SocialiteProviders\\Strava\\StravaExtendSocialite@handle',
        'SocialiteProviders\\Trakt\\TraktExtendSocialite@handle',
        'SocialiteProviders\\TVShowTime\\TVShowTimeExtendSocialite@handle',
        'SocialiteProviders\\Uber\\UberExtendSocialite@handle',
    ],
        
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
