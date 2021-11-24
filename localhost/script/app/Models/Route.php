<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Route extends Eloquent  {

    use HasFactory;
    protected $table = 'route';
    
    protected $fillable = [
        'name', 
        'path',
        'Admin',
        'User', 
        'for',    
        'icon', 
        'routes'                             
    ];

}