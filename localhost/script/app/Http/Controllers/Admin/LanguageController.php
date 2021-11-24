<?php
namespace App\Http\Controllers\Admin;
use App\Models\Language;
use App\Models\IconSvg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LanguageController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}
    

//------------------------------------new icon svg
    function icon_svg(Request $req)
    {
        $data = new Language;
        $newColumnType = 'text';
        $nameicon = $req->iconName;

        Schema::table('languages', function (Blueprint $table) use ($newColumnType, $nameicon) {
            $table->$newColumnType($nameicon)->nullable()->default('no-icon.svg');                 
        });

        $data = new IconSvg;
        $data->name = $req->iconName;
        $data->local = $req->local;

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end new icon svg

//------------------------------------edit icon svg
    function edit_icon_svg(Request $req)
    {
        $data = Language::find($req->id);

        include(app_path().'\Providers\system\start.php');
        foreach($get_svgs as $svg){
          $name = $svg->name;
          if($req->has(''.$name.'')) {
            $$name = $req->file(''.$name.'');
            $filename = $$name->getClientOriginalName();
            $$name->move(public_path('icons-svg'), $filename);
            $data->$name = $req->file(''.$name.'')->getClientOriginalName();
          }

        }

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end edit icon svg

//------------------------------------new language
    function lang_add(Request $req)
    {
        $data = new Language;
        include(app_path().'\Providers\system\start.php');
          foreach($sys_lang as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }
        if($req->has('flag')) {
            $flag = $req->file('flag');
            $filename = $flag->getClientOriginalName();
            $flag->move(public_path('flags'), $filename);
            $data->flag = $req->file('flag')->getClientOriginalName();
        }

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end new language

//------------------------------------edit language
    function lang_edit(Request $req)
    {
        $data = Language::find($req->id);
        include(app_path().'\Providers\system\start.php');
          foreach($sys_lang as $name){
            if($req->has(''.$name.'')) {$data->$name = $req->$name;}
          }

        if(str_contains(url()->current(), '/admin/ads')){
          foreach($get_routes as $route){
            if($route->for=="User")
                $Adsdesktop = ''.$route->name.'ADdesktop';
                $Adstablet = ''.$route->name.'ADtablet';
                $Adsmobile = ''.$route->name.'ADmobile';
            if($req->has(''.$Adsdesktop.'')) {$data->$Adsdesktop = $req->$Adsdesktop;}
            if($req->has(''.$Adstablet.'')) {$data->$Adstablet = $req->$Adstablet;}
            if($req->has(''.$Adsmobile.'')) {$data->$Adsmobile = $req->$Adsmobile;}

          }
        }


        if($req->has('flag')) {
            $flag = $req->file('flag');
            $filename = $flag->getClientOriginalName();
            $flag->move(public_path('flags'), $filename);
            $data->flag = $req->file('flag')->getClientOriginalName();
        }

        foreach($sys_lang_medea as $name=>$path){
          if($req->has(''.$name.'')) {
            $$name = $req->file(''.$name.'');
            $filename = $$name->getClientOriginalName();
            $$name->move(public_path(''.$path.''), $filename);
            $data->$name = $req->file(''.$name.'')->getClientOriginalName();
          }
        }

        $data->save();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back(); 
    } 
//------------------------------------end edit language

//------------------------------------delete language
    function lang_delete($id)
    {
        $data=Language::find($id);
        $data->delete();
        toastr()->success('', ''. __('AA.successful') .'', ['timeOut' => 3000]);
        return back();
    } 
//------------------------------------end delete language


}