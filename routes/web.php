<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OwnerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CustomerController::class, 'home'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Routes accessible to users with the 'admin' role
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
});

// owner
Route::middleware(['auth', 'role:cafeteria owner'])->group(function () {
    // Routes accessible to users with the 'admin' role
    Route::get('owner/dashboard', [OwnerController::class, 'dashboard'])->name('owner.dashboard');
    Route::post('/owner/logout', [OwnerController::class, 'destroy'])->name('owner.logout');
});

// customer
Route::middleware(['auth', 'role:customer'])->group(function () {
    // Routes accessible to users with the 'customer' role
    Route::get('customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    Route::post('/customer/logout', [CustomerController::class, 'destroy'])->name('customer.logout');
});

require __DIR__ . '/auth.php';
