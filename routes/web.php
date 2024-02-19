<?php

use App\Http\Controllers\Admin\CekIndicatorsControllers;
use App\Http\Controllers\Admin\CekStunningController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuGroupController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\TestingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::permanentRedirect('/', '/login');

Route::group(['middleware' => ['auth', 'verified', 'role:Super Admin'], 'as' => 'admin.'], function () {
    Route::resource('/', DashboardController::class)->only(['index']);
    Route::resource('stunnings', CekStunningController::class)->only(['index', 'store', 'update', 'destroy', 'create']);
    Route::resource('stunnings.indicators', CekIndicatorsControllers::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('roles', RoleController::class)->only(['index','store', 'update', 'destroy']);
    Route::resource('permissions', PermissionController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('menus', MenuGroupController::class)->only(['index', 'store', 'update', 'destroy']);
    Route::resource('menus.items', MenuItemController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('routes', RouteController::class)->only(['index', 'store', 'update', 'destroy']);

    Route::resource('testing', TestingController::class)->only('index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
