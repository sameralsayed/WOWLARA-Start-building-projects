<?php
namespace App\Http\Controllers\Admin;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}
    
//------------------------------------add new for plan
    function plan_add(Request $req)
    {
        $data = new Plan;
        include(app_path().'/Providers/system/start.php');
          foreach($form_plan as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end add new for plan


//------------------------------------plan delete
    function plan_delete(Request $req)
    {
        $data=Plan::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    } 
//------------------------------------end plan delete


}