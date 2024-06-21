<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\cvController;
use App\Http\Controllers\Dashboard\msgsController;
use App\Http\Controllers\Dashboard\userController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\dashboardController;
use App\Http\Controllers\Dashboard\tech_skillsController;

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

Route::get('/lara', function () {
    return view('welcome');
});

/*Route::get('/web', function () {
    return view('website.index');
});
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard/admin', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::middleware(['auth', 'verified'])->group(function () {

Route::resource('/users', userController::class);
Route::resource('/cv', cvController::class);
Route::resource('/skills', tech_skillsController::class);
Route::resource('/projects', ProjectController::class);
Route::resource('/msg', msgsController::class);


});
Route::get('/logout',[dashboardController::class,'logout'])->name('logout');

Route::resource('', HomeController::class);
Route::get('/details/{id}', [detailsController::class,'project'])->name('project.data');
Route::resource('/contact', contactController::class);


//)->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
