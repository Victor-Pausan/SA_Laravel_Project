<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\StatesController;
use App\Models\GymClass;
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

Route::redirect('/home', '/');

Route::get('/lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships');

Route::prefix('clubs')->group(function () {
    Route::get('/', [StatesController::class, 'index'])->name('clubs');
    Route::get('/{id}', [StatesController::class, 'show'])->name('clubs.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name("account");
    //Route::get('/account/membership', [AccountController::class, 'showMembership'])->name('account.membership');

    Route::get('/classes', [ClassesController::class, 'index'])->name('classes.index');
    Route::get('/classes/{id}', [ClassesController::class, 'show'])->name('classes.show');

    Route::get('/memberships/{id}', [MembershipController::class, 'create'])->name('membership.create');
    Route::post('/membership/created', [MembershipController::class, 'store'])->name('membership.success');
    Route::get('/membership/created', [MembershipController::class, 'show'])->name('membership.show');

    Route::delete('/account', [AccountController::class, 'destroy'])->name('account.destroy');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', [ClassesController::class, 'create'])->name('admin.create');
    Route::post('/admin', [ClassesController::class, 'store'])->name('admin.store');
    Route::delete('/admin/{id}', [ClassesController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/{id}', [ClassesController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{id}', [ClassesController::class, 'update'])->name('admin.update');
});

Route::group((['middleware' => ['auth', 'member']]), function () {
    Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/feedback/{classId}', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    Route::get('/account/membership', [AccountController::class, 'edit'])->name('account.membership');
    Route::put('/account/membership', [AccountController::class, 'update'])->name('account.membership.update');
    Route::get('/account/feedbacks', [FeedbackController::class, 'show'])->name('account.feedbacks');
    Route::delete('account/membership', [MembershipController::class, 'destroy'])->name('account.membership.destroy');
});
