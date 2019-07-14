<?php

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', ['foo' => 'bar']);
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/users', 'UsersController@index')->name('users.index');
Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::get('/users/{$user}/edit', 'UsersController@edit')->name('users.edit');

