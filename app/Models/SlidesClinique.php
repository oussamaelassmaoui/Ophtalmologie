<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidesClinique extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'photo',
        'text',
        'name',
        'user_id',
    ];
   
    public function user(){ 
        //propertie
        return $this->belongsTo(User::class);

    }
}
