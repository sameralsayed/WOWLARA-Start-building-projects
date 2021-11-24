<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class IconSvg extends Eloquent  {

    public $table = 'icon_svg';
    
    protected $fillable = [
        'name',  
        'local'          
    ];

}