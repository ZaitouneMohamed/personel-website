<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\skillsControlller;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\servicesControlller;
use App\Http\Controllers\admin\projectController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');
Route::resource('admin/settings', manageadminController::class);

Route::prefix('admin')->middleware(['IsAdmin'])->group(function(){
    // Route::get('/', function () {
    //     return view('admin.home');
    // })->name('admin.home');
    // Route::resource('/settings', manageadminController::class);
    // update role
    Route::get('update_role',[parametersController::class,'set_role'])->name('role.set');
    Route::put('role',[parametersController::class,'role'])->name('role.update');
    // update links
    Route::get('update_links',[parametersController::class,'set_links'])->name('links.set');
    Route::put('links',[parametersController::class,'links'])->name('links.update');
    // update about sections
    Route::get('update_about',[parametersController::class,'set_about'])->name('about.set');
    Route::put('about',[parametersController::class,'about'])->name('about.update');
    // update picture
    Route::get('update_picture',[parametersController::class,'set_picture'])->name('picture.set');
    Route::put('picture',[parametersController::class,'picture'])->name('picture.update');
    // update navbar logo
    Route::get('update_navlogo',[parametersController::class,'set_navlogo'])->name('navlogo.set');
    Route::put('navlogo',[parametersController::class,'navlogo'])->name('navlogo.update');
    // update footer logo
    Route::get('update_footerlogo',[parametersController::class,'set_footerlogo'])->name('footerlogo.set');
    Route::put('footerlogo',[parametersController::class,'footerlogo'])->name('footerlogo.update');
    // update cv
    Route::get('update_cv',[parametersController::class,'set_cv'])->name('cv.set');
    Route::put('cv',[parametersController::class,'cv'])->name('cv.update');
    // project sections
    Route::resource('projects', projectController::class);
    // skills sections
    Route::resource('skills', skillsControlller::class);
    // services sections
    Route::resource('services', servicesControlller::class);
    // readed an unreaded messages
    Route::get('readed',[messagesController::class,'readed'])->name('messages.readed');
    Route::get('unreaded',[messagesController::class,'unreaded'])->name('messages.unreaded');

});
