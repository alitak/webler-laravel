@extends('layout.layout')

@section("title")
    <a href="{{ route('products.index') }}">&lt; Vissza</a> {{ $title }}
@endsection

@section("content")
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                    </h4>
                    <p class="card-text text-danger font-weight-bold">{{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
