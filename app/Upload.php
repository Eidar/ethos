<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
     public $fillable= [
    'profile_id', 'title', 'author', 'description', 'type', 'source', 'score', 'created_at', 'updated_at',
    ];

}
