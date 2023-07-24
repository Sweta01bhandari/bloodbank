<?php
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StockController;





Route::get('/admin/register', 'App\Http\Controllers\AdminController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'App\Http\Controllers\AdminController@register')->name('admin.register.submit');










Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');



Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::get('/donor', 'App\Http\Controllers\DonorController@index')->name('donor.index');
Route::get('/show/{donor_id}', 'App\Http\Controllers\DonorController@show')->name('donor.show');
Route::get('/donor/create', 'App\Http\Controllers\DonorController@create')->name('donor.create');
Route::post('/donors/store', 'App\Http\Controllers\DonorController@store')->name('donor.store');
Route::post('/donors/destroy', 'App\Http\Controllers\DonorController@destroy')->name('donor.destroy');
Route::get('/donors/{donor}', 'App\Http\Controllers\DonorController@show')->name('donor.show');
Route::get('/donors/{donor}/edit', 'App\Http\Controllers\DonorController@edit')->name('donor.edit');
Route::post('/donors/{donor}/update', 'App\Http\Controllers\DonorController@update')->name('donor.update');



Route::get('/patient/register', 'App\Http\Controllers\PatientController@showRegistrationForm')->name('patient.register');
Route::post('/patient/register', 'App\Http\Controllers\PatientController@register')->name('patient.register.submit');

Route::get('/patient/login', 'App\Http\Controllers\PatientController@showLoginForm');
Route::post('/patient/login', 'App\Http\Controllers\PatientController@login');

Route::get('/patient', 'App\Http\Controllers\PatientController@index')->name('patient.index');
Route::get('/patient/create', 'App\Http\Controllers\PatientController@create')->name('patient.create');
Route::post('/patient/store', 'App\Http\Controllers\PatientController@store')->name('patient.store');
Route::post('/patient/destroy', 'App\Http\Controllers\PatientController@destroy')->name('patient.destroy');
Route::get('/patient/{patient}', 'App\Http\Controllers\PatientController@show')->name('patient.show');
Route::get('/patient/{patient}/edit', 'App\Http\Controllers\PatientController@edit')->name('patient.edit');
Route::post('/patient/{patient}/update', 'App\Http\Controllers\PatientController@update')->name('patient.update');



// routes/web.php
Route::get('/request', 'App\Http\Controllers\RequestController@index')->name('request.index');
Route::get('/show/{request_id}', 'App\Http\Controllers\RequestController@show')->name('request.show');
Route::get('/request/create', 'App\Http\Controllers\RequestController@create')->name('request.create');
Route::post('/request/store', 'App\Http\Controllers\RequestController@store')->name('request.store');
Route::post('/request/destroy', 'App\Http\Controllers\RequestController@destroy')->name('request.destroy');
Route::get('/request/{request}', 'App\Http\Controllers\RequestController@show')->name('request.show');
Route::get('/request/{request}/edit', 'App\Http\Controllers\RequestController@edit')->name('request.edit');
Route::post('/request/{request}/update', 'App\Http\Controllers\RequestController@update')->name('request.update');




Route::get('/stocks', 'App\Http\Controllers\StockController@index')->name('stock.index');
Route::get('/stocks/create', 'App\Http\Controllers\StockController@create')->name('stock.create');
Route::get('/show/{Stocks_id}', 'App\Http\Controllers\StockController@show')->name('stock.show');
Route::post('/stocks/store', 'App\Http\Controllers\StockController@store')->name('stock.store');
Route::post('/stocks/destroy', 'App\Http\Controllers\StockController@destroy')->name('stock.destroy');
Route::get('/stocks/{stock}/edit', 'App\Http\Controllers\StockController@edit')->name('stock.edit');
Route::post('/stocks/{stock}/update', 'App\Http\Controllers\StockController@update')->name('stock.update');





Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');







Route::get('/donor/register', 'App\Http\Controllers\DonorController@showRegistrationForm')->name('donor.register');
Route::post('/donor/register', 'App\Http\Controllers\DonorController@register')->name('donor.register.submit');








Route::get('/blood-donation', 'App\Http\Controllers\BloodDonationController@showForm');
Route::post('/blood-donation', 'App\Http\Controllers\BloodDonationController@submitForm');


Route::get('/donor/register', [DonorController::class, 'showRegistrationForm'])->name('donor.register');
Route::post('/donor/register', [DonorController::class, 'register']);
Route::get('/donor/login', [DonorController::class, 'showLoginForm'])->name('donor.login');
Route::post('/donor/login', [DonorController::class, 'login']);


Route::middleware('auth:donor')->group(function () {
   Route::get('/donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard');
});


Route::post('/donor/logout', [DonorController::class, 'logout'])->name('donor.logout')->middleware('auth');


Route::get('/donor/dashboard', function () {
   return view('donor.dashboard');
})->name('donor.dashboard')->middleware('auth');


Route::post('/donor/create-donation-request', [DonorController::class, 'createDonationRequest'])->name('donor.create_donation_request')->middleware('auth');
Route::get('donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard');
Route::get('/donors', [DonorController::class, 'index'])->name('donor.index');
Route::post('/donors', [DonorController::class, 'store'])->name('donor.store');
Route::get('/donors/{donor}', [DonorController::class, 'edit'])->name('donor.edit');
Route::put('/donors/{donor}', [DonorController::class, 'update'])->name('donor.update');
Route::delete('/donors/{donor}', [DonorController::class, 'destroy'])->name('donor.destroy');