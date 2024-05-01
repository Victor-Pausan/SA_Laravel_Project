<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\StatesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships');

Route::prefix('clubs')->group(function() {
    Route::get('/', [StatesController::class, 'index'])->name('clubs');
    Route::get('/{id}', [StatesController::class, 'show'])->name('clubs.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name("account");
});
