<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total', 'delivered','shipping_id'];


    function orderItems()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty','total');
    }

    
}
