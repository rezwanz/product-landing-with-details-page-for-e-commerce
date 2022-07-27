@extends('master')

@section('title')
    Product Details
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{ asset($product['image']) }}" alt="" style="height: 500px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ms-2">
                        <h1>{{ $product['name'] }}</h1>
                        <p>Product price: {{ $product['price'] }} TK</p>
                        <p>{{ $product['long_description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
