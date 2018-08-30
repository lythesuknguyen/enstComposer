<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopAddress extends Model
{
    protected $fillable =[
     	'shop_fulladdress', 'shop_zipcode', 'latitude', 'longitude','country','pref','town','village','updated_at'
    ];
    
	protected $primaryKey = 'shop_address_id';
    
    public function shop()
    {
      return $this->hasOne(Shop::class);
    }
}
