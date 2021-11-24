<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Report extends Eloquent  {

    public $table = 'routes';
    
    protected $fillable = [              
        'user_id',
        'photo_id',        
        'gallery_id'   
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

    public function gallery()
    {
        return $this->belongsTo('App\Models\Gallery');
    }

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    } 

}