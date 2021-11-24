<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class PageRoute extends Eloquent  {

    use HasFactory;
    protected $table = 'page_route';
    
    protected $fillable = [
        'name', 
        'path', 
        'route'     
    ];

}