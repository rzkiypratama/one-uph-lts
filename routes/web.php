<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/nationality', function () {
    return view('nationality');
});

Route::get('/studylevel', function () {
    return view('studylevel');
});

Route::get('/campus', function () {
    return view('campus');
});

Route::get('/fieldstudy', function () {
    return view('fieldstudy');
});

Route::get('/programmajor', function () {
    return view('programmajor');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/personalinformation', function () {
    return view('personalinformation');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/international', function () {
    return view('international');
});
