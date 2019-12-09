<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
   public function step1()
   {
        return redirect()->route('checkout.shipping');
   }

   public function storePayment(Request $request)
   {
    //    $order=Order::create([
    //        'total'=>Cart::total(),
    //        'delivered'=> 0,
    //    ]);


    //    $carItems=Cart::content();
    //    foreach ($cartItems as $$cartItem) {
    //        $order->orderItems()->attach($cartItem->id,[
    //         'qty'=>$cartItem->qty,
    //         'total'=> $cartItem->qty * $cartItem->price
    //         ]);
    //    }
   }

   public function shipping()
   {
       return view('front.shipping-info');
   }
}
