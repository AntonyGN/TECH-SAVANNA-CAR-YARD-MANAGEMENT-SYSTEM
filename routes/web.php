<?php

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

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\cardetailsController;
use App\Http\Controllers\cardocumentsController;
use App\Http\Controllers\VehiclesalesController;
use App\Http\Controllers\inventoryController;
use App\Http\Controllers\contractsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsermanagementController;


Route::get('/', function () {
	return redirect('/dashboard');
})->middleware('auth');

//added route for download document
Route::get('/cardocuments/{id}/download', [CardocumentsController::class, 'download'])->name('cardocuments.download');

Route::resource('/cardetails', CardetailsController::class);
Route::resource('/contracts', ContractsController::class);
Route::resource('/cardocuments', CardocumentsController::class);


//added route for upload Car document
Route::post('/cardocuments/upload', [CardocumentsController::class, 'upload'])->name('cardocuments.upload');

Route::resource('/inventory', InventoryController::class);
Route::resource('/customers', CustomersController::class);
Route::resource('/vehiclesales', VehiclesalesController::class);
Route::resource('/usermanagement', UsermanagementController::class);

Route::resource('/customers', CustomerController::class);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::post('/cars/store', [CardetailsController::class, 'store']);
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/usermanagement/store', [UsermanagementController::class, 'store']);
//added inventory route
Route::post('/inventory/store', [InventoryController::class, 'store']);




Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
