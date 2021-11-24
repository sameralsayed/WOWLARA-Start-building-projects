<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Payment extends Eloquent  {

    public $table = 'payment';
    
    protected $fillable = [  
        'user_id',               
        'plan_id'              
    ];

    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    } 

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

}