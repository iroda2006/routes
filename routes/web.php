<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/city/{name}', function ($name) {
    return "Welcome to {$name}!";
})->name('city.show');


Route::prefix('admin')->group(function () {
    Route::get('/users/{id}', function ($id) {
        return "User ID: {$id}";
    })->name('admin.users.show');
});

Route::prefix('profile')->group(function () {
    Route::get('/view', function () {
        return "Profile View Page";
    })->name('profile.view');

    Route::get('/edit', function () {
        return "Profile Edit Page";
    })->name('profile.edit');

    Route::get('/settings', function () {
        return "Profile Settings Page";
    })->name('profile.settings');
});

Route::prefix('products')->group(function () {
    // Barcha mahsulotlarni ko'rsatish
    Route::get('/', function () {
        return "All Products";
    })->name('products.index');

    // ID bo'yicha mahsulotni ko'rsatish
    Route::get('/{id}', function ($id) {
        return "Product ID: {$id}";
    })->name('products.show');

    // Mahsulotni tahrirlash
    Route::get('/{id}/edit', function ($id) {
        return "Edit Product ID: {$id}";
    })->name('products.edit');
});

Route::get('/old-url', function () {
    return redirect('/new-url');
});
