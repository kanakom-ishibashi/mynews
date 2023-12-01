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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
});

use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->group(function () {
    Route::get('admin/profile/create', 'add')->name('admin.profile.add');
    Route::post('admin/profile/create', 'create')->name('admin.profile.create');
    Route::get('admin/profile/edit', 'edit')->name('admin.profile.edit');

});


//Route::get('admin/profile/create', 'ProfileController@add');
//Route::get('admin/profile/edit', 'ProfileController@edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news', 'index')->name('news.index');
});


//Route::post('admin/profile/create', [ProfileController::class, 'create'])->name('admin.profile.create');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add')->middleware('auth');
});


Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news', 'index')->name('news.index');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
        Route::get('news/delete', 'delete')->name('news.delete');

});

Route::prefix('admin')->group(function () {
    Route::post('/profile/update', 'Admin\ProfileController@update')->name('admin.profile.update');
});