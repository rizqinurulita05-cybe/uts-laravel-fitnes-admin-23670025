<?php

use Illuminate\Support\Facades\Route;

// Landing Page Routes
Route::get('/', function () {
    return view('landing.index');
})->name('landing.index');

Route::get('/about', function () {
    return view('landing.about');
})->name('landing.about');

Route::get('/course', function () {
    return view('landing.course');
})->name('landing.course');

Route::get('/feature', function () {
    return view('landing.feature');
})->name('landing.feature');

Route::get('/blog', function () {
    return view('landing.blog');
})->name('landing.blog');

Route::get('/contact', function () {
    return view('landing.contact');
})->name('landing.contact');


// Admin Dashboard & Components Routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('/calendar', function () {
        return view('admin.calendar');
    })->name('admin.calendar');

    Route::get('/form-elements', function () {
        return view('admin.form_elements');
    })->name('admin.form_elements');

    Route::get('/page-login', function () {
        return view('admin.page_login');
    })->name('admin.login');

    Route::get('/table-plugins', function () {
        return view('admin.table_plugins');
    })->name('admin.tables');

    Route::get('/ui-modal', function () {
        return view('admin.ui_modal_notification');
    })->name('admin.modal');
});
