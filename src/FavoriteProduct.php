<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteProduct extends Model
{
    public $timestamps = false;
    protected $fillable =['user_id', 'product_id'];
}
