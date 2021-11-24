<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Save extends Eloquent  {

    public $table = 'save';
    
    protected $fillable = [
        'user_id',
        'photo_id'     
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    } 


}