<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/checkout', function () {
    return view('auth.register');
})->name('checkout');

Route::get('/index', function () {
    return view('index');
})->name('fffff');


Route::get('/', function () {
    return view('landing.home');
})->name('landing.home');

Route::get('/features', function () {
    return view('landing.features');
})->name('landing.features');

Route::match(['get','post'],'/contact',[ContactController::class, 'landingContact'])->name('landing.contact');


Route::group([
    "middleware" => ["auth", "verified"]
], function () {
//    Route::get('/board', function () {
//        return view('board.board');
//    })->name('board.board');

    Route::get('/board', [AnnouncementController::class, 'index'])->name('board.board');


    Route::get('/announce', [AnnouncementController::class, 'announcement'])->name('board.announce');

    Route::get('/profile', [AnnouncementController::class, 'indexProfile'])->name('board.profile');

    Route::match(['get', 'post'],'/contactB',[ContactController::class, 'contactUs'])->name('board.contact');

//    Route::get('/profile', function () {
//        return view('board.profile');
//    })->name('board.profile');

    Route::get('/profileForeign/{id}', [AnnouncementController::class, 'foreign'])->name('profileForeign');
    Route::post('/profileForeign/{id}', [AnnouncementController::class, 'foreign'])->name('profileForeign');
});

Route::post('/announce', [AnnouncementController::class, 'add'])->name('add');
//Route::get('/board', [\App\Http\Controllers\AnnouncementController::class, 'index'])->name('board.board');


//Route::get('/moderator', function () {
//    return view('moderator.moderator_page');
//})->name('moderator');


Route::get('/moderator', [AnnouncementController::class, 'indexModerator']);


