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
use App\Http\Controllers\AdminAuthLoginController;
use App\Http\Controllers\BloodDonationController;




Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');




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
// routes/web.php
Route::get('/patient/login', 'App\Http\Controllers\PatientController@showLoginForm')->name('patient.login');

// Route::post('/patient/login', [PatientController::class, 'login'])->name('patient.login.submit');
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







Route::get('/donor/register', 'App\Http\Controllers\DonorController@showRegistrationForm')->name('donor.register');
Route::post('/donor/register', 'App\Http\Controllers\DonorController@register')->name('donor.register.submit');


Route::get('/blood-donation', 'App\Http\Controllers\BloodDonationController@showForm')->name('blood-donation.form');;
Route::post('/blood-donation', 'App\Http\Controllers\BloodDonationController@storeRequest')->name('blood-donation.store');;
Route::get('/blood-donation-form', 'BloodDonationController@showForm');


Route::get('/donor/register', [DonorController::class, 'showRegistrationForm'])->name('donor.register');
Route::post('/donor/register', [DonorController::class, 'register'])->name('donor.login');
Route::get('/donor/login', [DonorController::class, 'showLoginForm'])->name('donor.login');
Route::post('/donor/login', [DonorController::class, 'login'])->name('donor.dashboard');


Route::middleware('auth:donor')->group(function () {
   Route::get('/donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard');
});

Route::middleware('auth:patient')->group(function () {
   Route::get('/donor/patient', [PatientController::class, 'dashboard'])->name('patient.dashboard');
});


Route::post('/donor/logout', [DonorController::class, 'logout'])->name('donor.logout')->middleware('auth');


// Route::get('/donor/dashboard', function () {
//    return view('donor.dashboard');
// })->name('donor.dashboard')->middleware('auth');
Route::get('/patient/dashboard', function () {
   return view('patient.dashboard');
})->name('patient.dashboard')->middleware('auth');
Route::get('patient/dashboard', [PatientController::class, 'dashboard'])->name('patient.dashboard');



Route::post('/donor/create-donation-request', [DonorController::class, 'createDonationRequest'])->name('donor.create_donation_request')->middleware('auth');
Route::get('donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard')->middleware('auth');;
Route::get('/donors', [DonorController::class, 'index'])->name('donor.index');
Route::post('/donors', [DonorController::class, 'store'])->name('donor.store');
Route::get('/donors/{donor}', [DonorController::class, 'edit'])->name('donor.edit');
Route::put('/donors/{donor}', [DonorController::class, 'update'])->name('donor.update');
Route::delete('/donors/{donor}', [DonorController::class, 'destroy'])->name('donor.destroy');



Route::prefix('admin')->group(function () {
   Route::get('login', 'AdminAuthLoginController@showLoginForm')->name('admin.login');
   Route::post('login', 'AdminAuthLoginController@login');
   Route::post('logout', 'AdminAuthLoginController@logout')->name('logout');
});


// Donor routes
Route::get('/donor/request', 'BloodDonationController@showRequestForm')->name('donor.request');
Route::post('/donor/request', 'BloodDonationController@storeRequest')->name('donor.storeRequest');

// Admin routes
Route::get('/admin/requests', 'App\Http\Controllers\AdminController@showRequests')->name('admin.requests');
Route::post('/admin/requests/{requestId}/accept', 'App\Http\ControllersAdminController@acceptRequest')->name('admin.acceptRequest');
Route::post('/admin/requests/{requestId}/reject', 'App\Http\ControllersAdminController@rejectRequest')->name('admin.rejectRequest');
Route::get('/admin/accept-donor/{requestId}', 'App\Http\ControllersAdminController@showAcceptDonorForm')->name('admin.showAcceptDonorForm');
Route::post('/admin/accept-reject-donor', 'App\Http\ControllersAdminController@acceptRejectDonor')->name('admin.acceptRejectDonor');
Route::get('/admin/accept-request/{requestId}', 'App\Http\ControllersAdminController@showAcceptRequestForm')->name('admin.showAcceptRequestForm');
Route::post('/admin/accept-request', 'App\Http\ControllersAdminController@acceptRequest')->name('admin.acceptRequest');
Route::get('/admin/delete-request/{requestId}', 'App\Http\ControllersAdminController@showDeleteRequestForm')->name('admin.showDeleteRequestForm');
Route::post('/admin/delete-request', 'App\Http\ControllersAdminController@deleteRequest')->name('admin.deleteRequest');
Route::get('/admin/delete-patient/{patientId}', 'App\Http\ControllersAdminController@showDeletePatientForm')->name('admin.showDeletePatientForm');
Route::post('/admin/delete-patient', 'App\Http\ControllersAdminController@deletePatient')->name('admin.deletePatient');
Route::get('/admin/manage-donations', 'App\Http\ControllersAdminController@manageDonations')->name('admin.manageDonations');
Route::get('/admin/manage-requests', 'App\Http\ControllersAdminController@manageRequests')->name('admin.manageRequests');
Route::get('/admin/accept-request/{id}', 'App\Http\ControllersAdminController@acceptRequest')->name('admin.acceptRequest');
Route::get('/admin/reject-request/{id}', 'App\Http\ControllersAdminController@rejectRequest')->name('admin.rejectRequest');
Route::get('/admin/delete-request/{id}', 'App\Http\ControllersAdminController@deleteRequest')->name('admin.deleteRequest');
Route::get('/admin/reject-request/{requestId}', 'App\Http\ControllersAdminController@showRejectDonorForm')->name('admin.showRejectDonorForm');
Route::post('/admin/reject-request', 'App\Http\ControllersdminController@rejectRequest')->name('admin.rejectRequest');
Route::get('/admin/reject-donor/{requestId}', 'App\Http\ControllersAdminController@showRejectDonorForm')->name('admin.showRejectDonorForm');
Route::post('/admin/reject-donor', 'App\Http\ControllersAdminController@rejectDonor')->name('admin.rejectDonor');



