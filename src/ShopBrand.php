<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopBrand extends Model
{
   	protected $table = 'shops_brands';
    public $timestamps = false;
    protected $fillable =['shop_id', 'brand_id'];
}
