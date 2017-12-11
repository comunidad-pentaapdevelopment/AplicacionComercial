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

// Usamos este codigo para crear un login manualmente

/*Route::get('test', function(){
	$user = new App\User;
	$user->name = 'Matias';
	$user->email = 'matiasrm14@gmail.com';
	$user->password = bcrypt('123123');
	$user->company_id = '1';
	$user->role_id = '1';
	$user->save();

	return $user;
});*/


Route::get('/', function () {
    return view('welcome');
});

Route::resource('producto', 'ProductsController');
Route::resource('empresa', 'CompaniesController');
Route::resource('categoria', 'CategoriesController');
Route::resource('gasto', 'ExpensesController');
Route::resource('proveedor', 'ProvidersController');

Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login');


