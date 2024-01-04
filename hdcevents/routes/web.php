<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

     $nome = "Kayque";

     $arr = [1,2,3,4,5];
    
    return view('welcome', ['nome' => $nome, 'arr' => $arr]);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $qtestoque = 9;
    
    return view('products', ['qtestoque' => $qtestoque]);
});

Route::get('/product/{id}', function ($id) {
    return view('product', ['id' => $id]); 
});