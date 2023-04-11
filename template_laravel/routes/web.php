<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect('/dashboard/v1');
});
Route::get('/dashboard/v1', 'MainController@dashboardV1')->name('dashboard-v1');
Route::get('/dashboard/v2', 'MainController@dashboardV2')->name('dashboard-v2');
Route::get('/dashboard/v3', 'MainController@dashboardV3')->name('dashboard-v3');
Route::get('/dropzone', 'MainController@Dropzone')->name('dropzone');
Route::get('/system', 'MainController@emailTemplateSystem')->name('system');
Route::get('/gallery/v1', 'MainController@galleryV1')->name('gallery-v1');
Route::get('/login/v3', 'MainController@loginV3')->name('login-v3');
Route::get('/register/v3', 'MainController@registerV3')->name('register-v3');
Route::post('/store', [App\Http\Controllers\MainController::class, 'store'])->name('store');
Route::get('/sample-data', [App\Http\Controllers\MainController::class, 'getSampleData']);
Route::post('/remove_image', [App\Http\Controllers\MainController::class, 'removeImage']);