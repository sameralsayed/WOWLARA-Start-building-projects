<?php
namespace App\Http\Controllers\Admin;
use App\Models\Language;
use App\Models\General;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeStatus extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}

//------------------------------------theme activation
    function theme_activation(Request $req)
    {
        $data = Language::find($req->id);
        if($req->has('theme_admin')) {$data->theme_admin = $req->theme_admin;}
        if($req->has('theme_user')) {$data->theme_user = $req->theme_user;} 
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    }
//------------------------------------end theme activation


//------------------------------------user status
    function status_user(Request $req)
    {
        $data = User::find($req->id);
        if($req->has('status')) {$data->status = $req->status;}
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    }
//------------------------------------end user status

//------------------------------------language status

    function status_lang(Request $req)
    {
        $data = Language::find($req->id);
        if($req->has('status')) {$data->status = $req->status;}
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    }
//------------------------------------end language status

//------------------------------------general status
    function status_GEL(Request $req)
    {
        $data = General::find($req->id);
        if($req->has('status')) {$data->status = $req->status;}
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    }
//------------------------------------end general status


}