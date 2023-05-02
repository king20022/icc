<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// to return the homepage
Route::get('/', [HomeController::class, 'create'])->name('welcome');






// Route::get('/dashboard', function () {
//     // return view('user.dashboard');

//     if (Auth::user()->role == 'admin') {
//         return redirect()->route('board');
//     } else if (Auth::user()->role == 'user') {
//         return view('user.dashboard');
//     }

// })->middleware(['auth', 'verified',])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

// define your user routes here


Route::middleware('auth', 'user')->group(function () {

    Route::get('/dashboard/user', [UserController::class, 'create'])->name('contact');

    Route::post('/dashboard/submit-complaint', [UserController::class, 'submit'])->name('complaint');


    Route::get('/dashboard/withdraw', [UserController::class, 'with'])->name('draw');

    Route::post('/dashboard/withdrawals', [UserController::class, 'withdraw'])->name('withdrawal');



});



// define your admin routes here


Route::middleware('auth', 'admin')->group(function () {





    Route::get('/admin/dashboard', [AdminController::class, 'getuser'])->name('board');

    Route::get('/admin/dashboard/{id}/complain', [AdminController::class, 'edit'])->name('edit');


    Route::put('/admin/dashboard/cover/{id}', [AdminController::class, 'recover'])->name('recovery');


    Route::get('/admin/dashboard/histroy', [AdminController::class, 'history'])->name('pending');


    Route::put('/admin/dashboard/status/{id}', [AdminController::class, 'admin'])->name('status');
});



require __DIR__ . '/auth.php';
