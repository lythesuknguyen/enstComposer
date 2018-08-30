<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
   public $timestamps = false;

   protected $fillable =['style_name'];

   protected $primaryKey = 'style_id';

   public function shopStyle()
    {
      return $this->hasMany(ShopStyle::class);
    }

}
