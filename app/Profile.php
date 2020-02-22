<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profiles';
    protected $fillable = ['user_id', 'avatar', 'facebook', 'youtube', 'about'];

    public function user()
    {
       return $this->belongsTo('App\User'); 
    }
}
