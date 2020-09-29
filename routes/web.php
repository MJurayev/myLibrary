<?php
use Illuminate\Http\Request;
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
// clients route


Route::get('/dashboard', "DashboardController@client");

Route::get('/books', "BooksController@show");
Route::get('/book/{id}',"BooksController@showBook");



//Auth::routes();
//for admins
Route::namespace('Admin')->prefix("admin")->group(function(){

    Route::get('/dashboard', "DashboardController@admin");
    Route::get('/users', "UsersController@admin");
    Route::post('/users/add', "UsersController@add");
    Route::get('/users/delete/{id}', "UsersController@delete");
    Route::post('/users/edit/{id}', "UsersController@edit");


}
);

