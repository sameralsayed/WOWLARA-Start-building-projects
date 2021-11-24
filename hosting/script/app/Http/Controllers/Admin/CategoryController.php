<?php
namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}

//------------------------------------new category
    function category_add(Request $req)
    {
        $data = new Category;
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
//------------------------------------end new category

//------------------------------------edit category
    function category_edit(Request $req)
    {
        $data = Category::find($req->id);
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
//------------------------------------end edit category

//------------------------------------delete category
    function category_delete($id)
    {
        $data=Category::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    }
//------------------------------------end delete category


}