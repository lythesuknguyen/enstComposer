<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopStyle extends Model
{
    public $timestamps = false;

    protected $fillable =['shop_id', 'style_id'];

    protected $table='shops_styles';

    protected $primaryKey = 'shop_id';   
    
    public function shop()
    {
      return $this->belongsTo(Shop::class);
    }


    public function style()
    {
      return $this->belongsTo(Style::class);
    }
}
