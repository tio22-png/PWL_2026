<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM: 254107023006 | Nama: Hanggoro Nursetio Margono';
});

// Route Parameter - Optional Parameter (default: 'John')
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

// Route Parameter - Multiple Parameters
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-: ' . $commentId;
});

// Route Parameter - Articles
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});
