<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products', [
            'products' => Product::query()->with('category')->get(),
            'title' => 'Termékek',
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            'product' => $product,
            'title' => $product->name,
        ]);
    }

}
