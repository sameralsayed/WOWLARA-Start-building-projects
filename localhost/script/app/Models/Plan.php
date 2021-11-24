<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Plan extends Eloquent  {

    public $table = 'plan';
    
    protected $fillable = [  
        'name',               
        'month',        
        'year',
        'limit'     
    ];

    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    } 

}