<?php

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

Route::get('/contact', function () {
    return view('landing.contact');
})->name('landing.contact');



Route::group([
    "middleware"=>["auth", "verified"]
], function(){
//    Route::get('/board', function () {
//        return view('board.board');
//    })->name('board.board');

    Route::get('/board', [\App\Http\Controllers\AnnouncementController::class, 'index'])->name('board.board');

    Route::get('/announce', function () {
        return view('board.announce');
    })->name('board.announce');

    Route::get('/profile', [\App\Http\Controllers\AnnouncementController::class, 'indexProfile'])->name('board.profile');

    Route::get('/contactB', function () {
        return view('board.contact');
    })->name('board.contact');

//    Route::get('/profile', function () {
//        return view('board.profile');
//    })->name('board.profile');

    Route::get('/profileForeign/{id}', [\App\Http\Controllers\AnnouncementController::class, 'foreign'])->name('profileForeign');
});

Route::post('/announce', [\App\Http\Controllers\AnnouncementController::class, 'add'])->name('add');
//Route::get('/board', [\App\Http\Controllers\AnnouncementController::class, 'index'])->name('board.board');







//Route::get('/moderator', function () {
//    return view('moderator.moderator_page');
//})->name('moderator');


Route::get('/moderator', [\App\Http\Controllers\AnnouncementController::class, 'indexModerator']);


