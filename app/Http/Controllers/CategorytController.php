<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategorytController extends Controller
{

    public function index(){
        //dd(cource::all());
        $categories=Category::all();

       return view('category.index',compact('categories'));
   }


      //create page
      public function create(){
        return view('category.create');
    }
    //store page
    public function store(Request $request){
        // dd($request);

        $request->validate([
         'name' => 'required',
         'salary' => 'required'

     ]);

     Category::create($request->all());

     return redirect('/category');


     }

     //edit page
     public function edit($id){

        $categories =Category::find($id);
        return view('category.edit',compact('categories'));


    }

    //update page
    public function update(Request $request, $id)
    {
      $categories = Category::find($id);
      $categories->name = request('name');
      $categories->salary = request('salary');
      $categories->save();
              $request->validate([
              'name' => 'required',
              'salary' => 'required'
       ]);
      $categories->update($request->all());

      return redirect('/category');
  }

  //delete

  public function destroy($id){

    $categories = Category::find($id);
    $categories->delete();
    return redirect('/category');
}

}
