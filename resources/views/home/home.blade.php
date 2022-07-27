@extends('master')

@section('title')
    Home
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{ asset($product['image']) }}" alt="" class="card-img-top" style="height: 450px;">
                        <div class="card-body">
                            <h4>{{ $product['name'] }}</h4>
                            <p>Price: {!! $product['price'] !!}</p>
                            <p>{{ $product['short_description'] }}</p>
                            <a href="{{ route('details',['id' => $product['id']]) }}" class="btn btn-success float-end">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
