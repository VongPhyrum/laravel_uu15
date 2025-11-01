<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/posts', [PageController::class, 'posts'])->name('posts.index');
Route::get('/posts/{post}', [PageController::class, 'show'])->name('posts.show');
Route::get('/posts/category/{category}', [PageController::class, 'category'])->name('posts.category');

Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');