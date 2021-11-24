<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Verify extends Eloquent  {

    use HasFactory;
    public $table = 'verify';
    
    protected $fillable = [
        'user_id',
        'photo'      
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}