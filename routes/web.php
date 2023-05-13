<?php

use Illuminate\Support\Facades\Route;
use App\User;
//use XMLWriter;
use App\Models\Staff;

Route::resource('Staff', App\Http\Controllers\StaffController::class);
Route::get('resetPass/{email}', [App\Http\Controllers\StaffController::class, 'showResetPasswordForm'])->name('resetPassword.get');
Route::post('/Staff@reset', 'App\Http\Controllers\StaffController@reset');
Route::post('/Staff@store', 'App\Http\Controllers\StaffController@store');
Route::post('/Staff@login', 'App\Http\Controllers\StaffController@login');
Route::post('/Staff@destroy', 'App\Http\Controllers\StaffController@destroy');
Route::get('ForgotPass', [App\Http\Controllers\StaffController::class, 'ForgotPass'])->name('ForgotPass');
Route::get('staffList', [App\Http\Controllers\StaffController::class, 'staffList'])->name('staffList');
Route::get('addStaff', [App\Http\Controllers\StaffController::class, 'addStaff'])->name('addStaff');
Route::get('addCust', [App\Http\Controllers\StaffController::class, 'addCust'])->name('addCust');
Route::get('show', [App\Http\Controllers\CustController::class, 'show'])->name('searchCust');
Route::get('show', [App\Http\Controllers\StaffController::class, 'show'])->name('resetPass');

Route::post('ResetPassword', [App\Http\Controllers\StaffController::class, 'update'])->name('updatePassword');
Route::get('/displayStaff', 'App\Http\Controllers\StaffController@staffList');
Route::post('/staff/edit/{staffID}', 'App\Http\Controllers\StaffController@storeEdit')->name('storeEdit');
Route::post('/cust/edit/{custID}', 'App\Http\Controllers\CustController@storeEdit')->name('custEdit');

Route::resource('Cust', App\Http\Controllers\CustController::class);
Route::post('/Cust/store', [App\Http\Controllers\CustController::class, 'store'])->name('store');
Route::get('/xslt', 'App\Http\Controllers\StaffController@renderAdmins')->name('staffs.xsl');

Route::get('/', function () {
    return view('welcome');
});
