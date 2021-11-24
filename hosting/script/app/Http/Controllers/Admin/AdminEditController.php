<?php
namespace App\Http\Controllers\Admin;
use DotenvEditor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminEditController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}

//------------------------------------edit user
    function edit_user(Request $req)
    {
        $data = User::find($req->id);
        include(app_path().'/Providers/system/start.php');
          foreach($sys_user as $name){
            $data->$name = $req->$name;
          }
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end edit user


//------------------------------------ social logins
    public function login_edit(Request $req){

        include(app_path().'/Providers/system/start.php');

          foreach($social_logins as $name=>$s){

          $status = ''.$name.'_status';
          $id = ''.$name.'_client_id';
          $secret = ''.$name.'_client_secret';
          DotenvEditor::setKey(''.$name.'_status',''.$req->$status.'');
          DotenvEditor::setKey(''.$name.'_CLIENT_ID',''.$req->$id.'');
          DotenvEditor::setKey(''.$name.'_CLIENT_SECRET',''.$req->$secret.'');
          }

        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------ end social logins


//------------------------------------ email edit
    public function mail_edit(Request $req){
        include(app_path().'/Providers/system/start.php');

          foreach($mail_smtp as $name){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }
          DotenvEditor::setKey('MAIL_MAILER',''.$req->MAILER.'');



        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------ end email edit


//------------------------------------ sitemap edit
    public function sitemap_edit(Request $req){
        include(app_path().'/Providers/system/start.php');

          foreach($form_sitemap as $name){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }

        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------ end sitemap edit



//------------------------------------ payments system edit
    public function pay_edit(Request $req){
        include(app_path().'/Providers/system/start.php');

          foreach($pay_paypal as $name){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }

          foreach($pay_stripe as $name){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }

          DotenvEditor::setKey('STRIPE_status',''.$req->STRIPE_status.'');
          DotenvEditor::setKey('PAYPAL_status',''.$req->PAYPAL_status.'');

        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------ end payments system edit


//------------------------------------ storage edit
    public function storage_edit(Request $req){
        include(app_path().'/Providers/system/start.php');

          foreach($storage_aws as $name){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }
          DotenvEditor::setKey('storage_system',''.$req->storage_system.'');


        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------end storage edit


//------------------------------------site-settings  applied to all languages
    public function full(Request $req){
        include(app_path().'/Providers/system/start.php');

          foreach($site_full as $name=>$t){
          DotenvEditor::setKey(''.$name.'',''.$req->$name.'');
          }

        DotenvEditor::save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();        
    }
//------------------------------------end site-settings  applied to all languages

}