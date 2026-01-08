<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ecommerce\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- DASHBOARD ROUTES ---
Route::get('/', fn() => view('dashboard.index'))->name('dashboard.index');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/analytics', fn() => view('dashboard.analytics'))->name('analytics');
    Route::get('/crm',       fn() => view('dashboard.crm'))->name('crm');
    Route::get('/ecommerce', fn() => view('dashboard.ecommerce'))->name('ecommerce');
});

Route::get('/profile', fn() => view('profile.index'))->name('profile');
// --- UI COMPONENTS ROUTES ---
Route::prefix('pages/components')->name('components.')->group(function () {
    // Basic Components
    Route::get('/buttons',    fn() => view('pages.components.buttons'))->name('buttons');
    Route::get('/alerts',     fn() => view('pages.components.alerts'))->name('alerts');
    Route::get('/toasts',     fn() => view('pages.components.toasts'))->name('toasts');
    Route::get('/modals',     fn() => view('pages.components.modals'))->name('modals');
    Route::get('/cards',      fn() => view('pages.components.cards'))->name('cards');
    Route::get('/badges',      fn() => view('pages.components.badges'))->name('badges');
    Route::get('/inputs',      fn() => view('pages.components.inputs'))->name('inputs');
    Route::get('/widgets',      fn() => view('pages.components.widgets'))->name('widgets');

    // Tables
    Route::get('/tables',     fn() => view('pages.components.tables'))->name('tables');
    Route::get('/datatables', fn() => view('pages.components.datatables'))->name('datatables');

    // Forms
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/elements', fn() => view('pages.components.forms.elements'))->name('elements');
        Route::get('/layouts',  fn() => view('pages.components.forms.layouts'))->name('layouts');
        Route::get('/inputs',   fn() => view('pages.components.inputs'))->name('inputs'); // Dipindah ke grup form agar rapi
    });
});

// --- AUTHENTICATION PAGES ---
Route::prefix('pages/auth')->name('auth.')->group(function () {
    Route::get('/login-cover',    fn() => view('pages.auth.login-cover'))->name('login.cover');
    Route::get('/login-basic',    fn() => view('pages.auth.login-basic'))->name('login.basic');
    Route::get('/register-basic', fn() => view('pages.auth.register-basic'))->name('register.basic');
    Route::get('/register-cover', fn() => view('pages.auth.register-cover'))->name('register.cover');
});
Route::prefix('pages')->group(function () {
    Route::get('/blank',    fn() => view('pages.blank'))->name('pages.blank');
    Route::get('/apps/pos',    fn() => view('pages.apps.pos'))->name('pages.apps.pos');
});

// --- E-COMMERCE LOGIC (CRUD) ---
Route::prefix('ecommerce')->name('ecommerce.')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/cart',       fn() => view('ecommerce.cart'))->name('cart');
});
