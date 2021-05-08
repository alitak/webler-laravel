@extends('layout.layout')

@section("title")
    {{ $title }}
@endsection

@section("content")
    <div class="row">
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                        </h4>
                        <p class="card-text text-danger font-weight-bold">{{ $product->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
