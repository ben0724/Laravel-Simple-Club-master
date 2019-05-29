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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', "Admin\DashboardController@index");
    Route::resource('clubs', "Admin\ClubController");
    Route::resource('club_board_members', "Admin\ClubBoardMemberController");
    
    Route::get('excel_files', "Admin\ExcelFileController@index");

    Route::get('excel_files/upload', "Admin\ExcelFileController@upload");
    Route::post('excel_files', "Admin\ExcelFileController@store");

    Route::get('excel_files/{excel_file}', "Admin\ExcelFileController@download");
    Route::delete('excel_files/{excel_file}', "Admin\ExcelFileController@destroy");

    Route::get('users', "Admin\UserController@index");
    Route::get('users/{user}/make_club_admin', "Admin\UserController@make_club_admin");
    Route::post('users/{user}/make_club_admin', "Admin\UserController@make_club_admin");
});
