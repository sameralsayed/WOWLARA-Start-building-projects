<?php

return [

/*
|--------------------------------------------------------------------------
| Third Party Services
|--------------------------------------------------------------------------
|
| This file is for storing the credentials for third party services such
| as Mailgun, Postmark, AWS and more. This file provides the de facto
| location for this type of information, allowing packages to have
| a conventional file to locate the various service credentials.
|
*/
 
'mailgun' => [
  'domain' => env('MAILGUN_DOMAIN'),
  'secret' => env('MAILGUN_SECRET'),
  'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
],

'postmark' => [
  'token' => env('POSTMARK_TOKEN'),
],

'ses' => [
  'key' => env('AWS_ACCESS_KEY_ID'),
  'secret' => env('AWS_SECRET_ACCESS_KEY'),
  'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
],
 

'facebook' => [
  'client_id' => env('facebook_CLIENT_ID'),
  'client_secret' => env('facebook_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/facebook/callback',
],


'google' => [
  'client_id' => env('google_CLIENT_ID'),
  'client_secret' => env('google_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/google/callback',
],

'microsoft' => [
  'client_id' => env('microsoft_CLIENT_ID'),
  'client_secret' => env('microsoft_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/microsoft/callback',
],


'dailymotion' => [
  'client_id' => env('dailymotion_CLIENT_ID'),
  'client_secret' => env('dailymotion_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/dailymotion/callback', 
],

'deviantart' => [
  'client_id' => env('deviantart_CLIENT_ID'),
  'client_secret' => env('deviantart_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/deviantart/callback', 
],

'dribbble' => [
  'client_id' => env('dribbble_CLIENT_ID'),
  'client_secret' => env('dribbble_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/dribbble/callback', 
],

'flattr' => [
  'client_id' => env('flattr_CLIENT_ID'),
  'client_secret' => env('flattr_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/flattr/callback', 
],

'flickr' => [
  'client_id' => env('flickr_CLIENT_ID'),
  'client_secret' => env('flickr_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/flickr/callback', 
],

'foursquare' => [
  'client_id' => env('foursquare_CLIENT_ID'),
  'client_secret' => env('foursquare_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/foursquare/callback', 
],

'github' => [
  'client_id' => env('github_CLIENT_ID'),
  'client_secret' => env('github_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/github/callback', 
],

'imgur' => [
  'client_id' => env('imgur_CLIENT_ID'), 
  'client_secret' => env('imgur_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/imgur/callback', 
],

'instagram' => [
  'client_id' => env('instagram_CLIENT_ID'),
  'client_secret' => env('instagram_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/instagram/callback', 
],

'kakao' => [
  'client_id' => env('kakao_CLIENT_ID'), 
  'client_secret' => env('kakao_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/kakao/callback', 
],
 
'line' => [
  'client_id' => env('line_CLIENT_ID'),
  'client_secret' => env('line_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/line/callback', 
],

'medium' => [
  'client_id' => env('medium_CLIENT_ID'), 
  'client_secret' => env('medium_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/medium/callback', 
],

'meetup' => [
  'client_id' => env('meetup_CLIENT_ID'),
  'client_secret' => env('meetup_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/meetup/callback', 
],

'azure' => [
  'client_id' => env('azure_CLIENT_ID'),
  'client_secret' => env('azure_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/azure/callback', 
],

'naver' => [
  'client_id' => env('naver_CLIENT_ID'), 
  'client_secret' => env('naver_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/naver/callback', 
],

'odnoklassniki' => [
  'client_id' => env('odnoklassniki_CLIENT_ID'),
  'client_secret' => env('odnoklassniki_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/odnoklassniki/callback', 
],

'pinterest' => [
  'client_id' => env('pinterest_CLIENT_ID'), 
  'client_secret' => env('pinterest_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/pinterest/callback', 
],

'pixnet' => [
  'client_id' => env('pixnet_CLIENT_ID'),
  'client_secret' => env('pixnet_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/pixnet/callback', 
],

'pushbullet' => [
  'client_id' => env('pushbullet_CLIENT_ID'),
  'client_secret' => env('pushbullet_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/pushbullet/callback', 
],

'reddit' => [
  'client_id' => env('reddit_CLIENT_ID'),
  'client_secret' => env('reddit_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/reddit/callback', 
],

'snapchat' => [
  'client_id' => env('snapchat_CLIENT_ID'),  
  'client_secret' => env('snapchat_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/snapchat/callback', 
],

'stackexchange' => [
  'client_id' => env('stackexchange_CLIENT_ID'),
  'client_secret' => env('stackexchange_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/stackexchange/callback', 
],

'tumblr' => [
  'client_id' => env('tumblr_CLIENT_ID'),
  'client_secret' => env('tumblr_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/tumblr/callback', 
],

'vimeo' => [
  'client_id' => env('vimeo_CLIENT_ID'),
  'client_secret' => env('vimeo_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/vimeo/callback', 
],

'vkontakte' => [
  'client_id' => env('vkontakte_CLIENT_ID'),
  'client_secret' => env('vkontakte_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/vkontakte/callback', 
],

'weibo' => [
  'client_id' => env('weibo_CLIENT_ID'),
  'client_secret' => env('weibo_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/weibo/callback', 
],

'wordpress' => [
  'client_id' => env('wordpress_CLIENT_ID'),
  'client_secret' => env('wordpress_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/wordpress/callback', 
],

'yahoo' => [
  'client_id' => env('yahoo_CLIENT_ID'),
  'client_secret' => env('yahoo_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/yahoo/callback', 
],

'yammer' => [
  'client_id' => env('yammer_CLIENT_ID'),
  'client_secret' => env('yammer_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/yammer/callback', 
],

'yandex' => [
  'client_id' => env('yandex_CLIENT_ID'),
  'client_secret' => env('yandex_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/yandex/callback',  
],

'youtube' => [
  'client_id' => env('youtube_CLIENT_ID'),
  'client_secret' => env('youtube_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/youtube/callback', 
],

'battlenet' => [
  'client_id' => env('battlenet_CLIENT_ID'),
  'client_secret' => env('battlenet_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/battlenet/callback', 
],

'discord' => [
  'client_id' => env('discord_CLIENT_ID'),
  'client_secret' => env('discord_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/discord/callback',
],

'smashcast' => [
  'client_id' => env('smashcast_CLIENT_ID'),
  'client_secret' => env('smashcast_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/smashcast/callback', 
],

'steam' => [
  'client_id' => env('steam_CLIENT_ID'),
  'client_secret' => env('steam_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/steam/callback',
],

'twitch' => [
  'client_id' => env('twitch_CLIENT_ID'),
  'client_secret' => env('twitch_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/twitch/callback', 
],

'coursera' => [
  'client_id' => env('coursera_CLIENT_ID'),
  'client_secret' => env('coursera_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/coursera/callback', 
],


'goodreads' => [
  'client_id' => env('goodreads_CLIENT_ID'),
  'client_secret' => env('goodreads_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/goodreads/callback', 
],

'headhunter' => [
  'client_id' => env('headhunter_CLIENT_ID'),
  'client_secret' => env('headhunter_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/headhunter/callback', 
],

'stocktwits' => [
  'client_id' => env('stocktwits_CLIENT_ID'),
  'client_secret' => env('stocktwits_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/stocktwits/callback', 
],

'xing' => [
  'client_id' => env('xing_CLIENT_ID'),
  'client_secret' => env('xing_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/xing/callback', 
],


'asana' => [
  'client_id' => env('asana_CLIENT_ID'),
  'client_secret' => env('asana_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/asana/callback', 
],

'aweber' => [
  'client_id' => env('aweber_CLIENT_ID'),
  'client_secret' => env('aweber_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/aweber/callback', 
],

'bitly' => [
  'client_id' => env('bitly_CLIENT_ID'),
  'client_secret' => env('bitly_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/bitly/callback', 
],

'bitbucket' => [
  'client_id' => env('bitbucket_CLIENT_ID'),
  'client_secret' => env('bitbucket_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/bitbucket/callback', 
],

'box' => [
  'client_id' => env('box_CLIENT_ID'),
  'client_secret' => env('box_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/box/callback', 
],

'cheddar' => [
  'client_id' => env('cheddar_CLIENT_ID'),
  'client_secret' => env('cheddar_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/cheddar/callback', 
],

'constantcontact' => [
  'client_id' => env('constantcontact_CLIENT_ID'),
  'client_secret' => env('constantcontact_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/constantcontact/callback', 
],

'digitalocean' => [
  'client_id' => env('digitalocean_CLIENT_ID'),
  'client_secret' => env('digitalocean_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/digitalocean/callback', 
],

'disqus' => [
  'client_id' => env('disqus_CLIENT_ID'),
  'client_secret' => env('disqus_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/disqus/callback', 
],

'dropbox' => [
  'client_id' => env('dropbox_CLIENT_ID'),
  'client_secret' => env('dropbox_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/dropbox/callback', 
],

'envato' => [
  'client_id' => env('envato_CLIENT_ID'),
  'client_secret' => env('envato_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/envato/callback', 
],

'etsy' => [
  'client_id' => env('etsy_CLIENT_ID'),
  'client_secret' => env('etsy_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/etsy/callback', 
],

'eventbrite' => [
  'client_id' => env('eventbrite_CLIENT_ID'),
  'client_secret' => env('eventbrite_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/eventbrite/callback', 
],

'eyeem' => [
  'client_id' => env('eyeem_CLIENT_ID'),
  'client_secret' => env('eyeem_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/eyeem/callback', 
],

'harvest' => [
  'client_id' => env('harvest_CLIENT_ID'),
  'client_secret' => env('harvest_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/harvest/callback', 
],

'heroku' => [
  'client_id' => env('heroku_CLIENT_ID'),
  'client_secret' => env('heroku_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/heroku/callback', 
],

'hubspot' => [
  'client_id' => env('hubspot_CLIENT_ID'),
  'client_secret' => env('hubspot_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/hubspot/callback', 
],

'linkedin' => [
  'client_id' => env('linkedin_CLIENT_ID'),
  'client_secret' => env('linkedin_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/linkedin/callback', 
],

'mailchimp' => [
  'client_id' => env('mailchimp_CLIENT_ID'),
  'client_secret' => env('mailchimp_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/mailchimp/callback', 
],

'mailru' => [
  'client_id' => env('mailru_CLIENT_ID'),  
  'client_secret' => env('mailru_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/mailru/callback', 
],

'mattermost' => [
  'client_id' => env('mattermost_CLIENT_ID'),  
  'client_secret' => env('mattermost_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/mattermost/callback', 
],

'podio' => [
  'client_id' => env('podio_CLIENT_ID'),  
  'client_secret' => env('podio_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/podio/callback', 
],

'quickbooks' => [
  'client_id' => env('quickbooks_CLIENT_ID'),  
  'client_secret' => env('quickbooks_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/quickbooks/callback', 
],

'readability' => [
  'client_id' => env('readability_CLIENT_ID'),  
  'client_secret' => env('readability_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/readability/callback', 
],

'SalesForce' => [
  'client_id' => env('SalesForce_CLIENT_ID'),  
  'client_secret' => env('SalesForce_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/SalesForce/callback', 
],

'sharepoint' => [
  'client_id' => env('sharepoint_CLIENT_ID'),  
  'client_secret' => env('sharepoint_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/sharepoint/callback', 
],

'shopify' => [
  'client_id' => env('shopify_CLIENT_ID'),  
  'client_secret' => env('shopify_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/shopify/callback', 
],

'teamleader' => [
  'client_id' => env('teamleader_CLIENT_ID'),  
  'client_secret' => env('teamleader_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/teamleader/callback', 
],

'teamweek' => [
  'client_id' => env('teamweek_CLIENT_ID'),  
  'client_secret' => env('teamweek_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/teamweek/callback', 
],

'trello' => [
  'client_id' => env('trello_CLIENT_ID'),  
  'client_secret' => env('trello_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/trello/callback', 
],

'unsplash' => [
  'client_id' => env('unsplash_CLIENT_ID'),  
  'client_secret' => env('unsplash_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/unsplash/callback', 
],

'versionone' => [
  'client_id' => env('versionone_CLIENT_ID'),  
  'client_secret' => env('versionone_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/versionone/callback', 
],

'whmcs' => [
'client_id' => env('whmcs_CLIENT_ID'),
'client_secret' => env('whmcs_CLIENT_SECRET'),
'redirect' => ''.env('APP_URL').'/auth/whmcs/callback',
'url' => env('WHMCS_URL'), // URL of your WHMCS installation
],

'zendesk' => [
  'client_id' => env('zendesk_CLIENT_ID'),  
  'client_secret' => env('zendesk_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/zendesk/callback', 
],

'zoho' => [
  'client_id' => env('zoho_CLIENT_ID'),  
  'client_secret' => env('zoho_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/zoho/callback', 
],

'zoom' => [
  'client_id' => env('zoom_CLIENT_ID'),
  'client_secret' => env('zoom_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/zoom/callback',
],

'uclapi' => [
  'client_id' => env('uclapi_CLIENT_ID'),  
  'client_secret' => env('uclapi_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/uclapi/callback', 
],

'binance' => [
  'client_id' => env('binance_CLIENT_ID'),  
  'client_secret' => env('binance_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/binance/callback', 
],

'coinbase' => [
  'client_id' => env('coinbase_CLIENT_ID'),  
  'client_secret' => env('coinbase_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/binance/callback', 
],

'gumroad' => [
  'client_id' => env('gumroad_CLIENT_ID'),  
  'client_secret' => env('gumroad_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/coinbase/callback', 
],

'mollie' => [
  'client_id' => env('mollie_CLIENT_ID'),  
  'client_secret' => env('mollie_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/gumroad/callback', 
],

'patreon' => [
  'client_id' => env('patreon_CLIENT_ID'),  
  'client_secret' => env('patreon_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/mollie/callback', 
],

'paypal' => [
  'client_id' => env('paypal_CLIENT_ID'),  
  'client_secret' => env('paypal_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/paypal/callback', 
],

'redbooth' => [
  'client_id' => env('redbooth_CLIENT_ID'),  
  'client_secret' => env('redbooth_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/redbooth/callback', 
],

'stripe' => [
  'client_id' => env('stripe_CLIENT_ID'),  
  'client_secret' => env('stripe_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/stripe/callback', 
],

'venmo' => [
  'client_id' => env('venmo_CLIENT_ID'),  
  'client_secret' => env('venmo_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/venmo/callback', 
],

'deezer' => [
  'client_id' => env('deezer_CLIENT_ID'),  
  'client_secret' => env('deezer_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/deezer/callback', 
],

'discogs' => [
  'client_id' => env('discogs_CLIENT_ID'),  
  'client_secret' => env('discogs_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/discogs/callback', 
],

'mixcloud' => [
  'client_id' => env('mixcloud_CLIENT_ID'),  
  'client_secret' => env('mixcloud_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/mixcloud/callback', 
],

'soundcloud' => [
  'client_id' => env('soundcloud_CLIENT_ID'),  
  'client_secret' => env('soundcloud_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/soundcloud/callback', 
],

'spotify' => [
  'client_id' => env('spotify_CLIENT_ID'),  
  'client_secret' => env('spotify_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/spotify/callback', 
],

'admitad' => [
'client_id' => env('admitad_CLIENT_ID'),
'client_secret' => env('admitad_CLIENT_SECRET'),
'redirect' => ''.env('APP_URL').'/auth/admitad/callback',
],

'angellist' => [
'client_id' => env('angellist_CLIENT_ID'),
'client_secret' => env('angellist_CLIENT_SECRET'),
'redirect' => ''.env('APP_URL').'/auth/angellist/callback',
],

'douban' => [
  'client_id' => env('douban_CLIENT_ID'),  
  'client_secret' => env('douban_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/douban/callback', 
],

'fablabs' => [
  'client_id' => env('fablabs_CLIENT_ID'),
  'client_secret' => env('fablabs_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/fablabs/callback',
],

'fitbit' => [
  'client_id' => env('fitbit_CLIENT_ID'),  
  'client_secret' => env('fitbit_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/fitbit/callback', 
],

'flexkids' => [
  'client_id' => env('flexkids_CLIENT_ID'),  
  'client_secret' => env('flexkids_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/flexkids/callback', 
],

'strava' => [
  'client_id' => env('strava_CLIENT_ID'),  
  'client_secret' => env('strava_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/strava/callback', 
],

'trakt' => [
  'client_id' => env('trakt_CLIENT_ID'),  
  'client_secret' => env('trakt_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/trakt/callback', 
],

'tvshowtime' => [
  'client_id' => env('tvshowtime_CLIENT_ID'),  
  'client_secret' => env('tvshowtime_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/tvshowtime/callback', 
],

'uber' => [
  'client_id' => env('uber_CLIENT_ID'),  
  'client_secret' => env('uber_CLIENT_SECRET'),  
  'redirect' => ''.env('APP_URL').'/auth/uber/callback', 
],

'zoom' => [
  'client_id' => env('zoom_CLIENT_ID'),
  'client_secret' => env('zoom_CLIENT_SECRET'),
  'redirect' => ''.env('APP_URL').'/auth/zoom/callback',
],

];