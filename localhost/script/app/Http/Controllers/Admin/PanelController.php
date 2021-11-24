<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use DB;

class PanelController extends Controller
{ 

// find admin
    function __construct(){$this->middleware('admin');}
    
//------------------------------------ Panel
    public function adminPanel()
    {
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
          
        //codes


    return view('admin-panel', compact('users'));

    }
//------------------------------------ End Panel

}