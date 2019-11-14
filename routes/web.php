<?php

Route::namespace('Admin')->group(function() {
    Auth::routes(['register' => false]);
});

Route::middleware('auth:web_admin')->group(function() {
    Route::resource('quotes', 'QuoteController', ['only' => ['create', 'store']]);
});

Route::resource('quotes', 'QuoteController', ['only' => 'show']);

Route::get('/', 'RandomQuoteController');
