<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['product_name' ,'price' ,'product_image_url' ,'made_in' ,'size' ,'material','product_sex' ,'product_remarks','style_id','brand_id','main_category_id','sub_category_id','updated_at'];
    protected $primaryKey = 'product_id';
}
