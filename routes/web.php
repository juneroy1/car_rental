<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingTransactionsController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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
Auth::routes();
Route::get('/', [PageController::class, 'welcome']);
Route::get('/book', [BookingTransactionsController::class, 'book'])->middleware('is_admin');
// Route::get('/books', [BookingTransactionsController::class, 'books'])->middleware('is_admin');
Route::get('/book/{id}', [BookingTransactionsController::class, 'bookEdit'])->middleware('is_admin');
Route::post('/book/{id}', [BookingTransactionsController::class, 'bookUpdate'])->middleware('auth');
Route::post('/book/delete/{id}', [BookingTransactionsController::class, 'bookDelete'])->middleware('auth');
Route::post('/book', [BookingTransactionsController::class, 'bookSubmit'])->middleware('is_admin');
Route::get('/manage-bookings', [BookingTransactionsController::class, 'manageBookings'])->middleware('auth');
Route::get('/book_now/{id}', [BookingTransactionsController::class, 'bookNow'])->middleware('auth');
Route::post('/book_now', [BookingTransactionsController::class, 'bookNowSubmit'])->middleware('auth');
Route::get('/driver', [DriversController::class, 'driver'])->middleware('is_admin');
Route::post('/driver', [DriversController::class, 'driverSubmit'])->middleware('is_admin');
Route::get('/vehicle', [VehicleController::class, 'vehicle'])->middleware('is_admin');
Route::post('/vehicle', [VehicleController::class, 'vehicleSubmit']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// Route::get('/dispatcher', [DispatcherController::class, 'dispatcher']);
// Route::post('/dispatcher', [DispatcherController::class, 'dispatcherSubmit']);

