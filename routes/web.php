<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
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

Route::prefix('user')->group(function () {
    Route::get('view', [UserController::class, 'userView'])->name('user.view');
    Route::get('add', [UserController::class, 'userAdd'])->name('user.add');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
