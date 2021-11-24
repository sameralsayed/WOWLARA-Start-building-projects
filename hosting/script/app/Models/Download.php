<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Download extends Eloquent  {

    use HasFactory;
    public $table = 'download';
    
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