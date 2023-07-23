<?php

// index , about , post , contact

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

Route::get('/', [blogController::class, 'index'])->name('index');

Route::get('/about', [blogController::class, 'about'])->name('about');

Route::get('/post', [blogController::class, 'post'])->name('post');

Route::get('/contact', [blogController::class, 'contact'])->name('contact');

Route::post('/contact_data', [blogController::class, 'contact_data'])->name('blog.contact_data');
