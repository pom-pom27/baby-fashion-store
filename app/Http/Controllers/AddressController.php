<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Order;
use App\Cart;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Address::create($request->all());
        $cartItems=\Cart::content();

        foreach ($cartItems as $cartItem) {
            
            $order=Order::create([
                'total'=>\Cart::total(),
                'delivered'=> 0,
                'shipping_id'=>$cartItem->id
            ]);
        }
    
 
 
        $cartItems=\Cart::content();
        foreach ($cartItems as $cartItem) {
            $order->orderItems()->attach($cartItem->id,[
             'qty'=>$cartItem->qty,
             'total'=> $cartItem->qty * $cartItem->price
             ]);

            $orderBerhasil="Proses Order Berhasil"; 
            return  view('front.order-complete',compact('orderBerhasil'));
        }

        // $this->validate($request, [
        //     'address' => 'required',
        //     'city' => 'required',
        //     'state' => 'required',
        //     'kd_pos' => 'required|integer',
        //     'telp' => 'required|integer'
        // ]);



        // $address= new Address;
        // $address->address->get('address');
        // $address->city->get('city');
        // $address->state->get('address');
        // $address->kd_pos->get('kd_pos');
        // $address->telp->get('telp');
        // $address->first_name->get('first_name');
        // $address->last_name->get('last_name');
        
        // $address->save();

        

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
