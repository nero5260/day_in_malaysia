<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $fillable  = ['user_id' , 'posts_id', 'liked'];

}


