<?php
namespace App\Http\Controllers\Admin;
use App\Models\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}

//------------------------------------add new for general
    function GEL_add(Request $req)
    {
        $data = new General;
        include(app_path().'\Providers\system\start.php');
          foreach($sys_general as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

          foreach($get_routes as $route){
            if($route->for=="User")
                $name=$route->name;
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

        if($req->has('ads_image_promo')) {
            $ads_image_promo = $req->file('ads_image_promo');
            $filename = $ads_image_promo->getClientOriginalName();
            $ads_image_promo->move(public_path('ads'), $filename);
            $data->ads_image_promo = $req->file('ads_image_promo')->getClientOriginalName();
        } 

        if($req->has('theme_image')) {
            $theme_image = $req->file('theme_image');
            $filename = $theme_image->getClientOriginalName();
            $theme_image->move(public_path('uploads/themes'), $filename);
            $data->theme_image = $req->file('theme_image')->getClientOriginalName();


        }

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end add new for general


//------------------------------------edit for general
    function GEL_edit(Request $req)
    {
        $data = General::find($req->id);
        include(app_path().'\Providers\system\start.php');
          foreach($sys_general as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

          foreach($get_routes as $route){
            if($route->for=="User")
                $name=$route->name;
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

        if($req->has('ads_image_promo')) {
            $ads_image_promo = $req->file('ads_image_promo');
            $filename = $ads_image_promo->getClientOriginalName();
            $ads_image_promo->move(public_path('ads'), $filename);
            $data->ads_image_promo = $req->file('ads_image_promo')->getClientOriginalName();
        }   

        if($req->has('theme_image')) {
            $theme_image = $req->file('theme_image');
            $filename = $theme_image->getClientOriginalName();
            $theme_image->move(public_path('uploads/themes'), $filename);
            $data->theme_image = $req->file('theme_image')->getClientOriginalName();
        }
        
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------edit for general

//------------------------------------delete for general
    function GEL_delete($id)
    {
        $data=General::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    } 
//------------------------------------end delete for general


}