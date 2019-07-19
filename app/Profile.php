<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model 
{
	protected $fillable = ['name', 'designation', 'profile_pic', 'user_id'];
   public function user() {
        return $this->belongsTo('App\User'); 
    }
}
