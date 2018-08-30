<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchiveUser extends Model
{
    protected $fillable =['user_email', 'password', 'user_name', 'user_phone_number','facebook_id','instagram_id','twitter_id','updated_at'];
}
