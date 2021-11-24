<?php
namespace App\Http\Controllers\User;
use Auth;
use Config;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Report;
use App\Models\Verify;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Validator,Redirect,Response;

class AddController extends Controller
{

//------------------------------------for send verif
    function verif(Request $req)
    {
        $data = new Verify;
        if($req->has('photo')) {
            $photo = $req->file('photo');
            $filename = $photo->getClientOriginalName();
            $photo->move(public_path('verifys'), $filename);
            $data->photo = $req->file('photo')->getClientOriginalName();
        }
        $data->user_id = Auth::id();
        $data->save();
        toastr()->success('', ''. __('AA.Thank you, we will call you back') .'', ['timeOut' => 3000]);
        return back();
    } 
//------------------------------------end for send verif



}