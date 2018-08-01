<?php

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
})->name('welcome');

Route::get('/home', function () {
  return view('welcome')->with('message','คุณไม่สามารถทำรายการนี้ได้');
});

Auth::routes();
//Register
Route::get('/worker_register', 'Auth\RegisterController@worker_register')->name('register.worker');
Route::get('/manager_register', 'Auth\RegisterController@manager_register')->name('register.manager');
Route::get('/manager_free', 'Auth\RegisterController@manager_free')->name('register.manager_free');
Route::get('/manager_silver', 'Auth\RegisterController@manager_silver')->name('register.manager_silver');
Route::get('/manager_gold', 'Auth\RegisterController@manager_gold')->name('register.manager_gold');

Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/member', 'MemberController@index')->name('member.home');

Route::get('/manager', 'ManagerController@index')->name('manager.home');
//SAVE RESUME
Route::post('/save_resume/{id}', 'ManagerController@save_resume')->name('manager.save_resume');

//SEARCH JOB
Route::get('/search_job', 'SearchController@search_job')->name('search.job');
Route::get('/search_worker', 'SearchController@search_worker')->name('search.worker');

Route::resource('memberProfiles', 'MemberProfileController');
Route::get('/job_stared', 'MemberProfileController@stared')->name('memberProfiles.stared');
Route::get('/job_registered', 'MemberProfileController@registered')->name('memberProfiles.registered');
Route::get('/my_resume', 'MemberProfileController@my_resume')->name('memberProfiles.my_resume');


Route::resource('jobPositions', 'JobPositionController');
//ACTION JOBs
Route::post('/register/{id}', 'JobPositionController@register')->name('jobPositions.register');
Route::post('/star/{id}', 'JobPositionController@star')->name('jobPositions.star');

Route::resource('companies', 'companyController');
Route::get('/show_resume', 'companyController@show_resume')->name('companies.show_resume');


Route::resource('announcements', 'announcementsController');

Route::resource('governmentJobs', 'government_jobsController');