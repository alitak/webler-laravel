<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello world! <a href="' . route('products.index') . '">Termékek</a>';
//    return view('welcome');
});

Route::group([
    'prefix' => 'products',
    'as' => 'products.',
], function () {
    Route::get('', [ProductsController::class, 'index'])->name('index');
    Route::get('{product}/show', [ProductsController::class, 'show'])->name('show');


//    Route::get('', function () {
//        return view('products', [
//            'products' => \App\Models\Product::query()->with('category')->get(),
//            'title' => 'Termékek',
//        ]);
//
//        $return = '';
////        \App\Models\Product::all()->each(function($product) use (&$return) {
////            $return .= '
////                    <h2>
////                        <a href="' . route('products.show', $product->id) . '">
////                            ' . $product->name . '
////                        </a>
////                    </h2>';
////        });
//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql, $query->bindings);
//    });
//
//
//        foreach (\App\Models\Product::query()->get()->load('category') as $product) {
//            $return .= '
//                    <h2>
//                        <a href="' . route('products.show', $product->id) . '">
//                            ' . $product->name . ' - ' . $product->category->name . '
//                        </a>
//                    </h2>';
//        }
//        return $return;
//    })->name('index');
//
//    Route::get('/{product}/show', function (\App\Models\Product $product) {
//        return view('product', ['product' => $product, 'title' => $product->name]);
////        return \App\Models\Product::query()->where('id', $product_id)->first();
////        return \App\Models\Product::query()->find($product_id);
//        return $product;
//    })->name('show');// ->whereNumber(['product_id'])
});
