@extends('admin.layout.admin')
@section('content')
    <h3>Orders</h3>

    <ul style="list-style-type: none">
        @foreach($orders as $order)
            <li>
                <h5>Barang</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>harga</th>
                    </tr>
                    <tr>
                        @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}}</td>
                        </tr>
                        @endforeach
                    </tr>
                </table>
                <!-- !empty($order->name) ? $order->name->name:'' -->
            </li>


        @endforeach
    </ul>

@endsection