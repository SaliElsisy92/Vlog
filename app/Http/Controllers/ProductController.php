<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        //dd(cource::all());

        $products=Product::all();



       return view('product.index',compact('products'));
   }


      //create page
      public function create(){


        return view('product.create');
    }

    //store page
     public function store(Request $request){
       // dd($request);

       $request->validate([
        'product_name' => 'required',
        'price' => 'required'

    ]);

    Product::create($request->all());

    return redirect('/product');


    }
}
