<?php

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
    'prefix' => 'items',
    'as' => 'products.',
], function () {
    Route::get('', function () {
        return '
    <h2><a href="' . route('products.show', ['product_id' => 1]) . '">Tej</a></h2>
    <h2><a href="' . route('products.show', [2]) . '">Kenyér</a></h2>
    <h2><a href="' . route('products.show', 3) . '">Fogkrém</a></h2>
    ';
    })->name('index');

    Route::get('/{product_id}/show', function (int $product_id) {
        return match ($product_id) {
            1 => 'Tej',
            2 => 'Kenyér',
            3 => 'Fogkrém',
        };
    })->whereNumber(['product_id'])->name('show');
});
