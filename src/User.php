<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable

{
    protected $fillable =['user_email', 'password', 'user_name', 'user_phone_number','facebook_id','instagram_id','twitter_id','updated_at'];
}

