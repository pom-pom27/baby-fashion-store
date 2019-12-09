@extends('admin.layout.admin')


@section('content')
<h3>Product</h3>

<ul>

@forelse($products as $product)
    <li>
        <h4>Name of product: {{$product->name}}</h4>
        <h4>Category: {{$product->category->name}}</h4>
        <form action="{{route('product.destroy', $product->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>
    </li>

    @empty

    <h3>No Product</h3>

    @endforelse
</ul>
@endsection