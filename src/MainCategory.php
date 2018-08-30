<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    public $timestamps = false;
    protected $fillable =['main_category_name'];
}
