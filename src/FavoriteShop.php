<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteShop extends Model
{
    protected $table='favorite_shops';
    public $timestamps = false;
    protected $fillable =['user_id', 'shop_id'];
}
