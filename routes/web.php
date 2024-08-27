<?php

<<<<<<< HEAD
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

Route::view('/', 'welcome');
=======
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SysadminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:sysadmin'])->group(function () {
    Route::get('/sysadmin', [SysadminController::class, 'index'])->name('sysadmin.dashboard');
});

Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager',  [ManagerController::class, 'index'])->name('manager.dashboard');
    Route::get('/user',     [UserController::class, 'index'])->name('user.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user',     [UserController::class, 'index'])->name('user.dashboard');
});

require __DIR__.'/auth.php';
>>>>>>> PR_branch
