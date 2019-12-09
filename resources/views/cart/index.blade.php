@extends('layout.main')


@section('content')
    <div class="row">
    
        <h3>Cart Item</h3>

        <table class="table table-hover">
        <thead>
                <tr>
                    <th>Nama barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>ukuran</th>
                    <th>Aksi</th>
                    <!-- <th>Aksi</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)
                    <tr>
                        <td width="500">{{$cartItem->name}}</td>
                        <td width="150">{{$cartItem->price}}</td>
                        <td width="80">
                            {!!Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'PUT'])!!}
                                <input name="qty" type="text" value="{{$cartItem->qty}}" >
                        </td>
                        <td>
                            <div>
                                {!!Form::select('size',['small' => 'Small', 'medium'=> 'Medium', 'large' => 'Large'], $cartItem->options->has('size')?$cartItem->options->size:'') !!}
                            </div>
                        </td>
                        <td>
                            <input type="submit" value="OK" style="float: left; margin-right:10px" class="button hollow">
                            {!!Form::close()!!}

                            <form action="{{route('cart.destroy', $cartItem->rowId)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="submit" class="hollow button alert" value="Hapus">  
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <strong>TOTAL</strong>
                    </td>
                    <td>Harga: <strong>Rp.{{Cart::subtotal()}}</strong></td>
                    <td>Barang: <strong>{{Cart::count()}}</strong></td>
                    <td></td>
                    <td>
                    <a href="{{url('/checkout')}}" class="button expanded" >Checkout</a>
                    </td>
                </tr>
            </tbody>
        </table>
            
    </div>
@endsection