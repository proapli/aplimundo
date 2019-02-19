<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    
      public function update(){
            
            $cart = auth()->user()->cart;
            $cart->status = 'Pending';
            $cart = saved(); //UPDATE 
            
            $notification = 'Tu registro se ha registrado correctamente. Te contactaremos via mail';
            return back()->with(compact('notification'));

      }

}
