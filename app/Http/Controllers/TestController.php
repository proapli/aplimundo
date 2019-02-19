<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Category;
use App\Product;

class TestController extends Controller
{

    public function welcome()
     {   
       $products = Product::all();
    	//$categories = Category::has('products')->get();
    //	return view('welcome')->with(compact('categories'));
    	return view('welcome')->with(compact('products'));
      }
    

}
