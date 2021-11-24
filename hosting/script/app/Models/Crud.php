<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class crud extends Eloquent  {

    protected $table = 'crud';
    
    protected $fillable = [
        'route', 
        'name', 
        'type',   
        'file', 
        'user_id',   
        'default'                           
    ];
}