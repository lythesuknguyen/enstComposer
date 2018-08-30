<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopDiscount extends Model
{
    protected $fillable =['shop_discount_id','shop_discount_value','shop_discount_from','shop_discount_to','updated_at'];

    protected $primaryKey = 'shop_discount_id';
}
