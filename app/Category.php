<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','salary'];
    public function Product(){

        return $this->hasMany(Product::class,'id','cat_id');
    }
}
