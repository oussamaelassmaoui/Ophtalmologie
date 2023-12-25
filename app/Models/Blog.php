<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Blog extends Model
{
    use HasFactory;
    use Commentable;
    protected $fillable = [
        'quoted',
        'text',
       'title',
        'photo',
        'user_id',
    ];
    // public function admin(){
    //     return $this->belongsTo(Admin::class);
    // }
    public function user(){ 
        //propertie
        return $this->belongsTo(User::class);

    }
}
