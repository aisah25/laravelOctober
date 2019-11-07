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
    return view('index');
})->name('index');

Route::get('/profile', 'ProfileController@index');

Route::get('/gallery', 'galleryController@index');

Route::resource('/contact', 'contactController');

Route::resource('/article', 'ArticlesController');
Route::get('cariartikel', 'ArticlesController@search');
Route::get('/hapusarticle/{id}', 'ArticlesController@destroy');

Route::resource('/buku', 'BooksController');
Route::get('/hapusbuku/{id}', 'BooksController@destroy');

Route::resource('comments','CommentController',['only'=>['store']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup', 'UsersController@signup_store')->name('signup.store');

Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');
Route::get('logout', 'SessionsController@logout')->name('logout');

Route::get('forget-password','ReminderController@create')->name('reminders.create');
Route::post('forget-password','ReminderController@store')->name('reminders.store');

//handle changes password
Route::get('reset-password/{id}/{token}','ReminderController@edit')->name('reminders.edit');

Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');