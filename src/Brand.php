<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $fillable =['brand_name', 'brand_image_url', 'updated_at'];
     protected $primaryKey = 'brand_id';
}
