<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\admin\parametersController;
use App\Http\Controllers\admin\manageadminController;

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

Route::resource('message', messagesController::class);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['IsAdmin'])->group(function(){
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');
    Route::resource('/settings', manageadminController::class);
    // update role
    Route::get('update_role',[parametersController::class,'set_role'])->name('role.set');
    Route::put('role',[parametersController::class,'role'])->name('role.update');
    // update links
    Route::get('update_links',[parametersController::class,'set_links'])->name('links.set');
    Route::put('links',[parametersController::class,'links'])->name('links.update');
    // update about sections
    Route::get('update_about',[parametersController::class,'set_about'])->name('about.set');
    Route::put('about',[parametersController::class,'about'])->name('about.update');
    // update picture sections
    Route::get('update_picture',[parametersController::class,'set_picture'])->name('picture.set');
    Route::put('picture',[parametersController::class,'picture'])->name('picture.update');
});
