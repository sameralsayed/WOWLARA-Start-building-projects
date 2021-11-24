<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class SubCategory extends Eloquent  {

    use HasFactory;
    protected $table = 'sub_category';
    
    protected $fillable = [
        'category_id',    
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

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    } 

}