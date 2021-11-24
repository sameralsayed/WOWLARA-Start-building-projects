<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
    
class SocialLoginController extends Controller
{

public function facebook(){return Socialite::driver('facebook')->redirect();}
//------------------------------------------------------------- facebook
    public function facebookCallback()
    {
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $finduser = User::where('facebook_id', $user->id)->first();
        
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->intended('/user/profile');
         
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
        
                Auth::login($newUser);
        
                return redirect()->intended('/user/profile');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end


public function google(){return Socialite::driver('google')->redirect();}
//------------------------------------------------------------- google
    public function googleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
       
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function microsoft(){return Socialite::driver('microsoft')->redirect();}
//------------------------------------------------------------- microsoft
    public function microsoftCallback()
    {
        try {
      
            $user = Socialite::driver('microsoft')->user();
       
            $finduser = User::where('microsoft_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'microsoft_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function apple(){return Socialite::driver('apple')->redirect();}
//------------------------------------------------------------- apple
    public function appleCallback()
    {
        try {
      
            $user = Socialite::driver('apple')->user();
       
            $finduser = User::where('apple_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'apple_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function dailymotion(){return Socialite::driver('dailymotion')->redirect();}
//------------------------------------------------------------- dailymotion
    public function dailymotionCallback()
    {
        try {
      
            $user = Socialite::driver('dailymotion')->user();
       
            $finduser = User::where('dailymotion_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'dailymotion_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function deviantart(){return Socialite::driver('deviantart')->redirect();}
//------------------------------------------------------------- deviantart
    public function deviantartCallback()
    {
        try {
      
            $user = Socialite::driver('deviantart')->user();
       
            $finduser = User::where('deviantart_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'deviantart_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function dribbble(){return Socialite::driver('dribbble')->redirect();}
//-------------------------------------------------------------dribbble
    public function dribbbleCallback()
    {
        try {
      
            $user = Socialite::driver('dribbble')->user();
       
            $finduser = User::where('dribbble_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'dribbble_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function flattr(){return Socialite::driver('flattr')->redirect();}
//------------------------------------------------------------- flattr
    public function flattrCallback()
    {
        try {
      
            $user = Socialite::driver('flattr')->user();
       
            $finduser = User::where('flattr_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,           
                    'flattr_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function flickr(){return Socialite::driver('flickr')->redirect();}
//------------------------------------------------------------- flickr
    public function flickrCallback()
    {
        try {
      
            $user = Socialite::driver('flickr')->user();
       
            $finduser = User::where('flickr_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,               
                    'flickr_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function foursquare(){return Socialite::driver('foursquare')->redirect();}
//------------------------------------------------------------- foursquare
    public function foursquareCallback()
    {
        try {
      
            $user = Socialite::driver('foursquare')->user();
       
            $finduser = User::where('foursquare_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'foursquare_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function github(){return Socialite::driver('github')->redirect();}
//------------------------------------------------------------- github
    public function githubCallback()
    {
        try {
      
            $user = Socialite::driver('github')->user();
       
            $finduser = User::where('github_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function imgur(){return Socialite::driver('imgur')->redirect();}
//------------------------------------------------------------- imgur
    public function imgurCallback()
    {
        try {
      
            $user = Socialite::driver('imgur')->user();
       
            $finduser = User::where('imgur_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'imgur_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function instagram(){return Socialite::driver('instagram')->redirect();}
//------------------------------------------------------------- instagram
    public function instagramCallback()
    {
        try {
      
            $user = Socialite::driver('instagram')->user();
       
            $finduser = User::where('instagram_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'instagram_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function kakao(){return Socialite::driver('kakao')->redirect();}
//------------------------------------------------------------- kakao
    public function kakaoCallback()
    {
        try {
      
            $user = Socialite::driver('kakao')->user();
       
            $finduser = User::where('kakao_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'kakao_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function line(){return Socialite::driver('line')->redirect();}
//------------------------------------------------------------- line
    public function lineCallback()
    {
        try {
      
            $user = Socialite::driver('line')->user();
       
            $finduser = User::where('line_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'line_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function medium(){return Socialite::driver('medium')->redirect();}
//------------------------------------------------------------- medium
    public function mediumCallback()
    {
        try {
      
            $user = Socialite::driver('medium')->user();
       
            $finduser = User::where('medium_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'medium_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function meetup(){return Socialite::driver('meetup')->redirect();}
//------------------------------------------------------------- meetup
    public function meetupCallback()
    {
        try {
      
            $user = Socialite::driver('meetup')->user();
       
            $finduser = User::where('meetup_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'meetup_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function azure(){return Socialite::driver('azure')->redirect();}
//------------------------------------------------------------- azure
    public function azureCallback()
    {
        try {
      
            $user = Socialite::driver('azure')->user();
       
            $finduser = User::where('azure_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'azure_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function naver(){return Socialite::driver('naver')->redirect();}
//------------------------------------------------------------- naver
    public function naverCallback()
    {
        try {
      
            $user = Socialite::driver('naver')->user();
       
            $finduser = User::where('naver_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'naver_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function odnoklassniki(){return Socialite::driver('odnoklassniki')->redirect();}
//------------------------------------------------------------- odnoklassniki
    public function odnoklassnikiCallback()
    {
        try {
      
            $user = Socialite::driver('odnoklassniki')->user();
       
            $finduser = User::where('odnoklassniki_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'odnoklassniki_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end
    
public function pinterest(){return Socialite::driver('pinterest')->redirect();}
//------------------------------------------------------------- pinterest
    public function pinterestCallback()
    {
        try {
      
            $user = Socialite::driver('pinterest')->user();
       
            $finduser = User::where('pinterest_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'pinterest_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function pixnet(){return Socialite::driver('pixnet')->redirect();}
//------------------------------------------------------------- pixnet
    public function pixnetCallback()
    {
        try {
      
            $user = Socialite::driver('pixnet')->user();
       
            $finduser = User::where('pixnet_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'pixnet_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function pushbullet(){return Socialite::driver('pushbullet')->redirect();}
//------------------------------------------------------------- pushbullet
    public function pushbulletCallback()
    {
        try {
      
            $user = Socialite::driver('pushbullet')->user();
       
            $finduser = User::where('pushbullet_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'pushbullet_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function reddit(){return Socialite::driver('reddit')->redirect();}
//------------------------------------------------------------- reddit
    public function redditCallback()
    {
        try {
      
            $user = Socialite::driver('reddit')->user();
       
            $finduser = User::where('reddit_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'reddit_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function snapchat(){return Socialite::driver('snapchat')->redirect();}
//------------------------------------------------------------- snapchat
    public function snapchatCallback()
    {
        try {
      
            $user = Socialite::driver('snapchat')->user();
       
            $finduser = User::where('snapchat_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'snapchat_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function stackexchange(){return Socialite::driver('stackexchange')->redirect();}
//------------------------------------------------------------- stackexchange
    public function stackexchangeCallback()
    {
        try {
      
            $user = Socialite::driver('stackexchange')->user();
       
            $finduser = User::where('stackexchange_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'stackexchange_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function tumblr(){return Socialite::driver('tumblr')->redirect();}
//------------------------------------------------------------- tumblr
    public function tumblrCallback()
    {
        try {
      
            $user = Socialite::driver('tumblr')->user();
       
            $finduser = User::where('tumblr_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'tumblr_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function twitter(){return Socialite::driver('twitter')->redirect();}
//------------------------------------------------------------- twitter
    public function twitterCallback()
    {
        try {
      
            $user = Socialite::driver('twitter')->user();
       
            $finduser = User::where('twitter_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function vimeo(){return Socialite::driver('vimeo')->redirect();}
//------------------------------------------------------------- vimeo
    public function vimeoCallback()
    {
        try {
      
            $user = Socialite::driver('vimeo')->user();
       
            $finduser = User::where('vimeo_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'vimeo_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function vkontakte(){return Socialite::driver('vkontakte')->redirect();}
//------------------------------------------------------------- vkontakte
    public function vkontakteCallback()
    {
        try {
      
            $user = Socialite::driver('vkontakte')->user();
       
            $finduser = User::where('vkontakte_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'vkontakte_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function weibo(){return Socialite::driver('weibo')->redirect();}
//------------------------------------------------------------- weibo
    public function weiboCallback()
    {
        try {
      
            $user = Socialite::driver('weibo')->user();
       
            $finduser = User::where('weibo_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'weibo_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function wordpress(){return Socialite::driver('wordpress')->redirect();}
//------------------------------------------------------------- wordpress
    public function wordpressCallback()
    {
        try {
      
            $user = Socialite::driver('wordpress')->user();
       
            $finduser = User::where('wordpress_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'wordpress_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function yahoo(){return Socialite::driver('yahoo')->redirect();}
//------------------------------------------------------------- yahoo
    public function yahooCallback()
    {
        try {
      
            $user = Socialite::driver('yahoo')->user();
       
            $finduser = User::where('yahoo_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'yahoo_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function yammer(){return Socialite::driver('yammer')->redirect();}
//------------------------------------------------------------- yammer
    public function yammerCallback()
    {
        try {
      
            $user = Socialite::driver('yammer')->user();
       
            $finduser = User::where('yammer_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'yammer_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function yandex(){return Socialite::driver('yandex')->redirect();}
//------------------------------------------------------------- yandex
    public function yandexCallback()
    {
        try {
      
            $user = Socialite::driver('yandex')->user();
       
            $finduser = User::where('yandex_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'yandex_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function youtube(){return Socialite::driver('youtube')->redirect();}
//------------------------------------------------------------- youtube
    public function youtubeCallback()
    {
        try {
      
            $user = Socialite::driver('youtube')->user();
       
            $finduser = User::where('youtube_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'youtube_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function battlenet(){return Socialite::driver('battlenet')->redirect();}
//------------------------------------------------------------- battlenet
    public function battlenetCallback()
    {
        try {
      
            $user = Socialite::driver('battlenet')->user();
       
            $finduser = User::where('battlenet_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'battlenet_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function discord(){return Socialite::driver('discord')->redirect();}
//------------------------------------------------------------- discord
    public function discordCallback()
    {
        try {
      
            $user = Socialite::driver('discord')->user();
       
            $finduser = User::where('discord_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'discord_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function smashcast(){return Socialite::driver('smashcast')->redirect();}
//------------------------------------------------------------- smashcast
    public function smashcastCallback()
    {
        try {
      
            $user = Socialite::driver('smashcast')->user();
       
            $finduser = User::where('smashcast_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'smashcast_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function steam(){return Socialite::driver('steam')->redirect();}
//------------------------------------------------------------- steam
    public function steamCallback()
    {
        try {
      
            $user = Socialite::driver('steam')->user();
       
            $finduser = User::where('steam_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'steam_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function twitch(){return Socialite::driver('twitch')->redirect();}
//------------------------------------------------------------- twitch
    public function twitchCallback()
    {
        try {
      
            $user = Socialite::driver('twitch')->user();
       
            $finduser = User::where('twitch_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitch_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end
    
public function coursera(){return Socialite::driver('coursera')->redirect();}
//------------------------------------------------------------- coursera
    public function courseraCallback()
    {
        try {
      
            $user = Socialite::driver('coursera')->user();
       
            $finduser = User::where('coursera_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'coursera_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function goodreads(){return Socialite::driver('goodreads')->redirect();}
//------------------------------------------------------------- goodreads
    public function goodreadsCallback()
    {
        try {
      
            $user = Socialite::driver('goodreads')->user();
       
            $finduser = User::where('goodreads_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'goodreads_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function headhunter(){return Socialite::driver('headhunter')->redirect();}
//------------------------------------------------------------- headhunter
    public function headhunterCallback()
    {
        try {
      
            $user = Socialite::driver('headhunter')->user();
       
            $finduser = User::where('headhunter_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'headhunter_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function stocktwits(){return Socialite::driver('stocktwits')->redirect();}
//------------------------------------------------------------- stocktwits
    public function stocktwitsCallback()
    {
        try {
      
            $user = Socialite::driver('stocktwits')->user();
       
            $finduser = User::where('stocktwits_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'stocktwits_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function xing(){return Socialite::driver('xing')->redirect();}
//------------------------------------------------------------- xing
    public function xingCallback()
    {
        try {
      
            $user = Socialite::driver('xing')->user();
       
            $finduser = User::where('xing_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'xing_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function asana(){return Socialite::driver('asana')->redirect();}
//------------------------------------------------------------- asana
    public function asanaCallback()
    {
        try {
      
            $user = Socialite::driver('asana')->user();
       
            $finduser = User::where('asana_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'asana_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function aweber(){return Socialite::driver('aweber')->redirect();}
//------------------------------------------------------------- aweber
    public function aweberCallback()
    {
        try {
      
            $user = Socialite::driver('aweber')->user();
       
            $finduser = User::where('aweber_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'aweber_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function bitly(){return Socialite::driver('bitly')->redirect();}
//------------------------------------------------------------- bitly
    public function bitlyCallback()
    {
        try {
      
            $user = Socialite::driver('bitly')->user();
       
            $finduser = User::where('bitly_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'bitly_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function bitbucket(){return Socialite::driver('bitbucket')->redirect();}
//------------------------------------------------------------- bitbucket
    public function bitbucketCallback()
    {
        try {
      
            $user = Socialite::driver('bitbucket')->user();
       
            $finduser = User::where('bitbucket_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'bitbucket_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function box(){return Socialite::driver('box')->redirect();}
//------------------------------------------------------------- box
    public function boxCallback()
    {
        try {
      
            $user = Socialite::driver('box')->user();
       
            $finduser = User::where('box_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'box_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function cheddar(){return Socialite::driver('cheddar')->redirect();}
//------------------------------------------------------------- cheddar
    public function cheddarCallback()
    {
        try {
      
            $user = Socialite::driver('cheddar')->user();
       
            $finduser = User::where('cheddar_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'cheddar_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function constantcontact(){return Socialite::driver('constantcontact')->redirect();}
//------------------------------------------------------------- constantcontact
    public function constantcontactCallback()
    {
        try {
      
            $user = Socialite::driver('constantcontact')->user();
       
            $finduser = User::where('constantcontact_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'constantcontact_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function digitalocean(){return Socialite::driver('digitalocean')->redirect();}
//------------------------------------------------------------- digitalocean
    public function digitaloceanCallback()
    {
        try {
      
            $user = Socialite::driver('digitalocean')->user();
       
            $finduser = User::where('digitalocean_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'digitalocean_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function disqus(){return Socialite::driver('disqus')->redirect();}
//------------------------------------------------------------- disqus
    public function disqusCallback()
    {
        try {
      
            $user = Socialite::driver('disqus')->user();
       
            $finduser = User::where('disqus_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'disqus_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function dropbox(){return Socialite::driver('dropbox')->redirect();}
//------------------------------------------------------------- dropbox
    public function dropboxCallback()
    {
        try {
      
            $user = Socialite::driver('dropbox')->user();
       
            $finduser = User::where('dropbox_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'dropbox_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function envato(){return Socialite::driver('envato')->redirect();}
//------------------------------------------------------------- envato
    public function envatoCallback()
    {
        try {
      
            $user = Socialite::driver('envato')->user();
       
            $finduser = User::where('envato_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'envato_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function etsy(){return Socialite::driver('etsy')->redirect();}
//------------------------------------------------------------- etsy
    public function etsyCallback()
    {
        try {
      
            $user = Socialite::driver('etsy')->user();
       
            $finduser = User::where('etsy_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'etsy_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function eventbrite(){return Socialite::driver('eventbrite')->redirect();}
//------------------------------------------------------------- eventbrite
    public function eventbriteCallback()
    {
        try {
      
            $user = Socialite::driver('eventbrite')->user();
       
            $finduser = User::where('eventbrite_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'eventbrite_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function eyeem(){return Socialite::driver('eyeem')->redirect();}
//------------------------------------------------------------- eyeem
    public function eyeemCallback()
    {
        try {
      
            $user = Socialite::driver('eyeem')->user();
       
            $finduser = User::where('eyeem_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'eyeem_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function harvest(){return Socialite::driver('harvest')->redirect();}
//------------------------------------------------------------- harvest
    public function harvestCallback()
    {
        try {
      
            $user = Socialite::driver('harvest')->user();
       
            $finduser = User::where('harvest_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'harvest_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function heroku(){return Socialite::driver('heroku')->redirect();}
//------------------------------------------------------------- heroku
    public function herokuCallback()
    {
        try {
      
            $user = Socialite::driver('heroku')->user();
       
            $finduser = User::where('heroku_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'heroku_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function hubspot(){return Socialite::driver('hubspot')->redirect();}
//------------------------------------------------------------- hubspot
    public function hubspotCallback()
    {
        try {
      
            $user = Socialite::driver('hubspot')->user();
       
            $finduser = User::where('hubspot_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'hubspot_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function linkedin(){return Socialite::driver('linkedin')->redirect();}
//------------------------------------------------------------- linkedin
    public function linkedinCallback()
    {
        try {
      
            $user = Socialite::driver('linkedin')->user();
       
            $finduser = User::where('linkedin_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function mailchimp(){return Socialite::driver('mailchimp')->redirect();}
//------------------------------------------------------------- mailchimp
    public function mailchimpCallback()
    {
        try {
      
            $user = Socialite::driver('mailchimp')->user();
       
            $finduser = User::where('mailchimp_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mailchimp_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function mailru(){return Socialite::driver('mailru')->redirect();}
//------------------------------------------------------------- mailru
    public function mailruCallback()
    {
        try {
      
            $user = Socialite::driver('mailru')->user();
       
            $finduser = User::where('mailru_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mailru_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function mattermost(){return Socialite::driver('mattermost')->redirect();}
//------------------------------------------------------------- mattermost
    public function mattermostCallback()
    {
        try {
      
            $user = Socialite::driver('mattermost')->user();
       
            $finduser = User::where('mattermost_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mattermost_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function podio(){return Socialite::driver('podio')->redirect();}
//------------------------------------------------------------- podio
    public function podioCallback()
    {
        try {
      
            $user = Socialite::driver('podio')->user();
       
            $finduser = User::where('podio_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'podio_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function quickbooks(){return Socialite::driver('quickbooks')->redirect();}
//------------------------------------------------------------- quickbooks
    public function quickbooksCallback()
    {
        try {
      
            $user = Socialite::driver('quickbooks')->user();
       
            $finduser = User::where('quickbooks_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'quickbooks_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end quickbooks

public function readability(){return Socialite::driver('readability')->redirect();}
//------------------------------------------------------------- readability
    public function readabilityCallback()
    {
        try {
      
            $user = Socialite::driver('readability')->user();
       
            $finduser = User::where('readability_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'readability_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function SalesForce(){return Socialite::driver('SalesForce')->redirect();}
//------------------------------------------------------------- SalesForce
    public function SalesForceCallback()
    {
        try {
      
            $user = Socialite::driver('SalesForce')->user();
       
            $finduser = User::where('SalesForce_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'SalesForce_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function sharepoint(){return Socialite::driver('sharepoint')->redirect();}
//------------------------------------------------------------- sharepoint
    public function sharepointCallback()
    {
        try {
      
            $user = Socialite::driver('sharepoint')->user();
       
            $finduser = User::where('sharepoint_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'sharepoint_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function shopify(){return Socialite::driver('shopify')->redirect();}
//------------------------------------------------------------- shopify
    public function shopifyCallback()
    {
        try {
      
            $user = Socialite::driver('shopify')->user();
       
            $finduser = User::where('shopify_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'shopify_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function teamleader(){return Socialite::driver('teamleader')->redirect();}
//------------------------------------------------------------- teamleader
    public function teamleaderCallback()
    {
        try {
      
            $user = Socialite::driver('teamleader')->user();
       
            $finduser = User::where('teamleader_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'teamleader_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function teamweek(){return Socialite::driver('teamweek')->redirect();}
//------------------------------------------------------------- teamweek
    public function teamweekCallback()
    {
        try {
      
            $user = Socialite::driver('teamweek')->user();
       
            $finduser = User::where('teamweek_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'teamweek_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function trello(){return Socialite::driver('trello')->redirect();}
//------------------------------------------------------------- trello
    public function trelloCallback()
    {
        try {
      
            $user = Socialite::driver('trello')->user();
       
            $finduser = User::where('trello_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'trello_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function unsplash(){return Socialite::driver('unsplash')->redirect();}
//------------------------------------------------------------- unsplash
    public function unsplashCallback()
    {
        try {
      
            $user = Socialite::driver('unsplash')->user();
       
            $finduser = User::where('unsplash_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'unsplash_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function versionone(){return Socialite::driver('versionone')->redirect();}
//------------------------------------------------------------- versionone
    public function versiononeCallback()
    {
        try {
      
            $user = Socialite::driver('versionone')->user();
       
            $finduser = User::where('versionone_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'versionone_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function whmcs(){return Socialite::driver('whmcs')->redirect();}
//------------------------------------------------------------- whmcs
    public function whmcsCallback()
    {
        try {
      
            $user = Socialite::driver('whmcs')->user();
       
            $finduser = User::where('whmcs_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'whmcs_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end   

public function zendesk(){return Socialite::driver('zendesk')->redirect();}
//------------------------------------------------------------- zendesk
    public function zendeskCallback()
    {
        try {
      
            $user = Socialite::driver('zendesk')->user();
       
            $finduser = User::where('zendesk_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'zendesk_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end
    
public function zoho(){return Socialite::driver('zoho')->redirect();}
//------------------------------------------------------------- zoho
    public function zohoCallback()
    {
        try {
      
            $user = Socialite::driver('zoho')->user();
       
            $finduser = User::where('zoho_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'zoho_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function zoom(){return Socialite::driver('zoom')->redirect();}
//------------------------------------------------------------- zoom
    public function zoomCallback()
    {
        try {
      
            $user = Socialite::driver('zoom')->user();
       
            $finduser = User::where('zoom_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'zoom_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end

public function uclapi(){return Socialite::driver('uclapi')->redirect();}
//------------------------------------------------------------- start uclapi
    public function uclapiCallback()
    {
        try {
      
            $user = Socialite::driver('uclapi')->user();
       
            $finduser = User::where('uclapi_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'uclapi_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end uclapi


public function binance(){return Socialite::driver('binance')->redirect();}
//------------------------------------------------------------- start binance
    public function binanceCallback()
    {
        try {
      
            $user = Socialite::driver('binance')->user();
       
            $finduser = User::where('binance_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'binance_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end binance

public function coinbase(){return Socialite::driver('coinbase')->redirect();}
//------------------------------------------------------------- start coinbase
    public function coinbaseCallback()
    {
        try {
      
            $user = Socialite::driver('coinbase')->user();
       
            $finduser = User::where('coinbase_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'coinbase_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end coinbase

public function gumroad(){return Socialite::driver('gumroad')->redirect();}
//------------------------------------------------------------- start gumroad
    public function gumroadCallback()
    {
        try {
      
            $user = Socialite::driver('gumroad')->user();
       
            $finduser = User::where('gumroad_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gumroad_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end gumroad

public function mollie(){return Socialite::driver('mollie')->redirect();}
//------------------------------------------------------------- start mollie
    public function mollieCallback()
    {
        try {
      
            $user = Socialite::driver('mollie')->user();
       
            $finduser = User::where('mollie_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mollie_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end mollie

public function patreon(){return Socialite::driver('patreon')->redirect();}
//------------------------------------------------------------- start patreon
    public function patreonCallback()
    {
        try {
      
            $user = Socialite::driver('patreon')->user();
       
            $finduser = User::where('patreon_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'patreon_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end patreon

public function paypal(){return Socialite::driver('paypal')->redirect();}
//------------------------------------------------------------- start paypal
    public function paypalCallback()
    {
        try {
      
            $user = Socialite::driver('paypal')->user();
       
            $finduser = User::where('paypal_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'paypal_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end paypal

public function redbooth(){return Socialite::driver('redbooth')->redirect();}
//------------------------------------------------------------- start redbooth
    public function redboothCallback()
    {
        try {
      
            $user = Socialite::driver('redbooth')->user();
       
            $finduser = User::where('redbooth_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'redbooth_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end redbooth

public function stripe(){return Socialite::driver('stripe')->redirect();}
//------------------------------------------------------------- start stripe
    public function stripeCallback()
    {
        try {
      
            $user = Socialite::driver('stripe')->user();
       
            $finduser = User::where('stripe_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'stripe_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end stripe

public function venmo(){return Socialite::driver('venmo')->redirect();}
//------------------------------------------------------------- start venmo
    public function venmoCallback()
    {
        try {
      
            $user = Socialite::driver('venmo')->user();
       
            $finduser = User::where('venmo_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'venmo_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end venmo

public function deezer(){return Socialite::driver('deezer')->redirect();}
//------------------------------------------------------------- start deezer
    public function deezerCallback()
    {
        try {
      
            $user = Socialite::driver('deezer')->user();
       
            $finduser = User::where('deezer_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'deezer_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end deezer

public function discogs(){return Socialite::driver('discogs')->redirect();}
//------------------------------------------------------------- start discogs
    public function discogsCallback()
    {
        try {
      
            $user = Socialite::driver('discogs')->user();
       
            $finduser = User::where('discogs_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'discogs_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end discogs

public function mixcloud(){return Socialite::driver('mixcloud')->redirect();}
//------------------------------------------------------------- start mixcloud
    public function mixcloudCallback()
    {
        try {
      
            $user = Socialite::driver('mixcloud')->user();
       
            $finduser = User::where('mixcloud_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mixcloud_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end mixcloud

public function soundcloud(){return Socialite::driver('soundcloud')->redirect();}
//------------------------------------------------------------- start soundcloud
    public function soundcloudCallback()
    {
        try {
      
            $user = Socialite::driver('soundcloud')->user();
       
            $finduser = User::where('soundcloud_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'soundcloud_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end soundcloud

public function spotify(){return Socialite::driver('spotify')->redirect();}
//------------------------------------------------------------- start spotify
    public function spotifyCallback()
    {
        try {
      
            $user = Socialite::driver('spotify')->user();
       
            $finduser = User::where('spotify_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'spotify_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end spotify

public function admitad(){return Socialite::driver('admitad')->redirect();}
//------------------------------------------------------------- start admitad
    public function admitadCallback()
    {
        try {
      
            $user = Socialite::driver('admitad')->user();
       
            $finduser = User::where('admitad_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'admitad_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end admitad

public function angellist(){return Socialite::driver('angellist')->redirect();}
//------------------------------------------------------------- start angellist
    public function angellistCallback()
    {
        try {
      
            $user = Socialite::driver('angellist')->user();
       
            $finduser = User::where('angellist_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'angellist_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end angellist

public function douban(){return Socialite::driver('douban')->redirect();}
//------------------------------------------------------------- start douban
    public function doubanCallback()
    {
        try {
      
            $user = Socialite::driver('douban')->user();
       
            $finduser = User::where('douban_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'douban_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end douban

public function fablabs(){return Socialite::driver('fablabs')->redirect();}
//------------------------------------------------------------- start fablabs
    public function fablabsCallback()
    {
        try {
      
            $user = Socialite::driver('fablabs')->user();
       
            $finduser = User::where('fablabs_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fablabs_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end fablabs

public function fitbit(){return Socialite::driver('fitbit')->redirect();}
//------------------------------------------------------------- start fitbit
    public function fitbitCallback()
    {
        try {
      
            $user = Socialite::driver('fitbit')->user();
       
            $finduser = User::where('fitbit_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fitbit_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end fitbit

public function flexkids(){return Socialite::driver('flexkids')->redirect();}
//------------------------------------------------------------- start flexkids
    public function flexkidsCallback()
    {
        try {
      
            $user = Socialite::driver('flexkids')->user();
       
            $finduser = User::where('flexkids_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'flexkids_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end flexkids

public function strava(){return Socialite::driver('strava')->redirect();}
//------------------------------------------------------------- start strava
    public function stravaCallback()
    {
        try {
      
            $user = Socialite::driver('strava')->user();
       
            $finduser = User::where('strava_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'strava_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end strava

public function trakt(){return Socialite::driver('trakt')->redirect();}
//------------------------------------------------------------- start trakt
    public function traktCallback()
    {
        try {
      
            $user = Socialite::driver('trakt')->user();
       
            $finduser = User::where('trakt_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'trakt_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end trakt

public function tvshowtime(){return Socialite::driver('tvshowtime')->redirect();}
//------------------------------------------------------------- start tvshowtime
    public function tvshowtimeCallback()
    {
        try {
      
            $user = Socialite::driver('tvshowtime')->user();
       
            $finduser = User::where('tvshowtime_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'tvshowtime_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end tvshowtime

public function uber(){return Socialite::driver('uber')->redirect();}
//------------------------------------------------------------- start uber
    public function uberCallback()
    {
        try {
      
            $user = Socialite::driver('uber')->user();
       
            $finduser = User::where('uber_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('/user/profile');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'uber_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/user/profile');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
//------------------------------------------------------------- end uber
}