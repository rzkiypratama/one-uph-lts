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

// dashboard

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/dashboard/intakeyear', function () {
    return view('dashboard/intakeyear');
});

Route::get('/dashboard/personalinformations', function () {
    return view('dashboard/personalinformations');
});

Route::get('/dashboard/required-document', function () {
    return view('dashboard/required-document');
});

Route::get('/dashboard/educationbackground', function () {
    return view('dashboard/educationbackground');
});

Route::get('/dashboard/entryoption', function () {
    return view('dashboard/entryoption');
});

Route::get('/dashboard/reviewpayment', function () {
    return view('dashboard/reviewpayment');
});

Route::get('/dashboard/applicationstatus', function () {
    return view('dashboard/applicationstatus');
});

Route::get('/tuition-fee/administration-documents', function () {
    return view('tuition-fee/administration-documents');
});

Route::get('/tuition-fee', function () {
    return view('tuition-fee/dashboard');
});

Route::get('/tuition-fee/re-registration', function () {
    return view('tuition-fee/re-registration');
});

Route::get('/tuition-fee/tuitionpayment', function () {
    return view('tuition-fee/tuitionpayment');
});
