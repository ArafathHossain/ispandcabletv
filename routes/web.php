<?php



Route::get('/', function () {return view('welcome');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
//area routes

Route::prefix('admin/areas/')->group(function(){ 
	Route::get('/all', 'Admin\Area\AreaController@index')->name('areas');
	Route::get('/create', 'Admin\Area\AreaController@create')->name('create.area');
	Route::post('/store', 'Admin\Area\AreaController@storearea')->name('store.area');
	Route::get('/delete/{id}', 'Admin\Area\AreaController@Deletearea');
	Route::get('/edit/{id}', 'Admin\Area\AreaController@Editarea');
	Route::post('/update/{id}', 'Admin\Area\AreaController@Updatearea');
});

Route::prefix('admin/district/')->group(function(){ 
	Route::get('/all', 'Admin\District\DistrictController@index')->name('district');
	Route::get('/create', 'Admin\District\DistrictController@create')->name('create.district');
	Route::post('/store', 'Admin\District\DistrictController@storedistrict')->name('store.district');
	Route::get('/delete/{id}', 'Admin\District\DistrictController@Deletedistrict');
	Route::get('/edit/{id}', 'Admin\District\DistrictController@Editdistrict');
	Route::post('/update/{id}', 'Admin\District\DistrictController@Updatedistrict');
});

Route::prefix('admin/upazila/thana/')->group(function(){
	Route::get('/all', 'Admin\UpazilaThana\UpazilaThanaController@index')->name('upazila_thana');
	Route::get('/create', 'Admin\UpazilaThana\UpazilaThanaController@create')->name('create.upazila_thana');
	Route::post('/store', 'Admin\UpazilaThana\UpazilaThanaController@storeupazila_thana')->name('store.upazila_thana');
	Route::get('/delete/{id}', 'Admin\UpazilaThana\UpazilaThanaController@Deleteupazila_thana');
	Route::get('/edit/{id}', 'Admin\UpazilaThana\UpazilaThanaController@Editupazila_thana');
	Route::post('/update/{id}', 'Admin\UpazilaThana\UpazilaThanaController@Updateupazila_thana');
});

Route::prefix('admin/isp/package')->group(function(){
	Route::get('/all', 'Admin\Packages\ISPpackageController@index')->name('isppackage');
	Route::get('/create', 'Admin\Packages\ISPpackageController@create')->name('create.isppackage');
	Route::post('/store', 'Admin\Packages\ISPpackageController@storeISPpackage')->name('store.isppackage');
	Route::get('/delete/{id}', 'Admin\Packages\ISPpackageController@DeleteISPpackage');
	Route::get('/edit/{id}', 'Admin\Packages\ISPpackageController@EditISPpackage');
	Route::post('/update/{id}', 'Admin\Packages\ISPpackageController@UpdateISPpackage');
});

Route::prefix('admin/cable_oparetor/package')->group(function(){
	Route::get('/all', 'Admin\Packages\COpackageController@index')->name('copackage');
	Route::get('/create', 'Admin\Packages\COpackageController@create')->name('create.copackage');
	Route::post('/store', 'Admin\Packages\COpackageController@storeCOpackage')->name('store.copackage');
	Route::get('/delete/{id}', 'Admin\Packages\COpackageController@DeleteCOpackage');
	Route::get('/edit/{id}', 'Admin\Packages\COpackageController@EditCOpackage');
	Route::post('/update/{id}', 'Admin\Packages\COpackageController@UpdateCOpackage');
});

Route::prefix('admin/client')->group(function(){
	Route::get('/all', 'Admin\client\ClientController@index')->name('clients');
	Route::get('/create', 'Admin\client\ClientController@create')->name('create.clients');
	Route::post('/store', 'Admin\client\ClientController@store')->name('store.clients');
	Route::get('/delete/{id}', 'Admin\client\ClientController@Delete');
	Route::get('/edit/{id}', 'Admin\client\ClientController@Edit');
	Route::post('/update/{id}', 'Admin\client\ClientController@Update');
});

 // For Show Upazila and Thana with ajax
Route::get('get/upazila-thana/{district_id}', 'Admin\client\ClientController@GetUpazilaThana');