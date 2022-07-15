<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Receptionist\DashboardController as ReceptionistDashboardController;
use App\Http\Middleware\CheckRole;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth', 'role:Administrator'])->group(function(){

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'role:Receptionist'])->group(function(){

    Route::get('/receptionist', [ReceptionistDashboardController::class, 'index'])->name('receptionist.dashboard');
});



require __DIR__.'/auth.php';
