<?php
namespace App\Http\Controllers\Admin;
use DotenvEditor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminEditController extends Controller
{ 



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


}