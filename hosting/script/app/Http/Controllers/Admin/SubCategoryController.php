<?php
namespace App\Http\Controllers\Admin;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}
    
//------------------------------------new sub category
    function Subcategory_add(Request $req)
    {
        $data = new SubCategory;
        if($req->has('category_id')) {$data->category_id = $req->category_id;}
        include(app_path().'/Providers/system/start.php');
          foreach($sys_category as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }
        if($req->has('iconsvg')) {
            $iconsvg = $req->file('iconsvg');
            $filename = $iconsvg->getClientOriginalName();
            $iconsvg->move(public_path('icons/categorys'), $filename);
            $data->iconsvg = $req->file('iconsvg')->getClientOriginalName();
        }     
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end new sub category

//------------------------------------edit sub category
    function Subcategory_edit(Request $req)
    {
        $data = SubCategory::find($req->id);
        if($req->has('category_id')) {$data->category_id = $req->category_id;}
        include(app_path().'/Providers/system/start.php');
          foreach($sys_category as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }
        if($req->has('iconsvg')) {
            $iconsvg = $req->file('iconsvg');
            $filename = $iconsvg->getClientOriginalName();
            $iconsvg->move(public_path('icons/categorys'), $filename);
            $data->iconsvg = $req->file('iconsvg')->getClientOriginalName();
        }   
        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end edit sub category

//------------------------------------delete sub category
    function Subcategory_delete($id)
    {
        $data=SubCategory::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    }
//------------------------------------end delete sub category


}