<?php

use PaymentProcess\AdminDashboard\App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use PaymentProcess\AdminDashboard\App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::prefix('admin')->group(function () {
        
    Route::get('/', [DashboardController::class,'getDashboard'])->name('dashboard');
});