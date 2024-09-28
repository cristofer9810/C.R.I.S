<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Category_debtController;
use App\Http\Controllers\Admin\Crud_userController;
use App\Http\Controllers\Admin\ReleaseController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ViewController;
use App\Http\Controllers\Admin\DebtController;
use App\Http\Controllers\Admin\UrgencyController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');


//rutas de control de registro
Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('crud_users', Crud_userController::class)->names('admin.crud_users');


//rutas de social
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('release', ReleaseController::class)->names('admin.release');


//rutas de zonas comunes
Route::resource('views', ViewController::class)->names('admin.views');


//rutas de estados de cuenta
Route::resource('category_debts', Category_debtController::class)->names('admin.category_debts');

Route::resource('debts', DebtController::class)->names('admin.debts');

Route::resource('urgencies', UrgencyController::class)->names('admin.urgencies');
