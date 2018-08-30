<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  
  protected $fillable =[
    'shop_name', 'shop_brand_name', 'shop_image_url','shop_phone_number','time_open','time_close','regular_holiday','near_station','shop_remarks','shop_address_id','updated_at'
  ]; 
  protected $table = 'shops';
  protected $primaryKey = 'shop_id';
 
  public function shopAddress()
  {
    return $this->belongsTo(ShopAddress::class);
  }
  
  public  function shopStyle()
  {
    return $this->hasMany(ShopStyle::class);
  }
  
}
