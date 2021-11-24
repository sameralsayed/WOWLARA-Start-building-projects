<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Category extends Eloquent  {

    use HasFactory;
    protected $table = 'category';
    
    protected $fillable = [
        'name',
        'local', 
        'to', 
        'adult',  
        'iconsvg', 
        'icon', 
        'color',
        'background_color',  
        'seo_title',
        'seo_keywords', 
        'seo_description', 
        'views', 
        'status'         
    ];

    public function subs()
    {
        return $this->hasMany('App\Models\SubCategory');
    }

}