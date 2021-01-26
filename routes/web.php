<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('categories.index'));
});

Route::resource('categories', 'CategoriesController')->except([
    'edit', 'update', 'destroy'
]);
