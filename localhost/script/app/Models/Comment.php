<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Comment extends Eloquent  {

    use HasFactory;
    public $table = 'comments';
    
    protected $fillable = [
        'comment',
        'photo_id',     
        'user_id'            
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