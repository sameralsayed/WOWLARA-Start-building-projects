<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\User;
class ViewController extends Controller
{

     function user($id) { 
        $user = User::find($id);  
        return view('user',$user);
     } 

}