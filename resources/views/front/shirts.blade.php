@extends('layout.main')

@section('title', 'Shirts')
@section('content')
 <!-- products listing -->
         <!-- Latest SHirts -->
         <div class="row">
         @forelse($shirts as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart" href="{{route('cart.addItem', $shirt->id)}}">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images', $shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt')}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                    Rp. {{$shirt->price}}
                    </h5>
                    <p>
                    {{$shirt->desc}}
                    </p>
                </div>
            </div>
            @empty
            <h3>No Shirt</h3>
        @endforelse
            </div>
@endsection