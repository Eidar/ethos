<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public $fillable= [
    'user_id', 'name', 'lstname', 'dob', 'country', 'place', 'about', 'avatar',
    ];

   public function profile()
    {
        return $this->hasOne('App\Upload');
    }


}
