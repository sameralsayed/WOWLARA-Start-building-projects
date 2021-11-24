<?php
namespace App\Http\Controllers\User;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
class EditController extends Controller
{

//------------------------------------for change lang
     function update_lang(Request $req) { 
        $data = User::find($req->id);
        $data->local = $req->local;  
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
     } 
//------------------------------------end for change lang


//------------------------------------for change design
     function update_design(Request $req) { 
        $data = User::find($req->id);
        $data->favorite_design = $req->favorite_design;  
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
     } 
//------------------------------------end for change design

//------------------------------------for verified
     function update_verified(Request $req) { 
        $data = User::find($req->id);
        $data->verified = $req->verified;  
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
     } 
//------------------------------------end for verified

//------------------------------------for edit info user
    function user_edit(Request $req)
    {
        $data = User::find($req->id);
        include(app_path().'\Providers\system\start.php');
        foreach($user_Information as $name=>$inp){
            if($req->has(''.$inp.'')) {$data->$inp = $req->$inp;}
        }
        if($req->has('photo')) {
            $photo = $req->file('photo');
            $filename = $photo->getClientOriginalName();
            $photo->move(public_path('site/user'), $filename);
            $data->photo = $req->file('photo')->getClientOriginalName();
        }
        if($req->has('background')) {
            $background = $req->file('background');
            $filename = $background->getClientOriginalName();
            $background->move(public_path('site/user'), $filename);
            $data->background = $req->file('background')->getClientOriginalName();
        }
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    }
//------------------------------------end for edit info user

}