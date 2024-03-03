<!-- resources/views/products/index.blade.php -->
@extends('layout/layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: auto; width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">{{ $product->price }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
