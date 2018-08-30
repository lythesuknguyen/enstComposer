<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $table='shops_products';
    public $timestamps = false;
 	protected $fillable =['shop_id', 'product_id'];
}
