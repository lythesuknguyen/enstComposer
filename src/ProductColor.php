<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
     public $timestamps = false;
     protected $table='products_colors';
     protected $fillable =['color_name','color_image_url','product_id'];
}
