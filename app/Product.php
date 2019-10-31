<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name','price','cat_id'];

    public function Category (){

        return $this->belongsTo(Category::class,'cat_id','id');
    }
}
