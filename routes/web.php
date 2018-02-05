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

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('index');
})->middleware('auth');;
Route::get('/settings', function () {
    return view('setting');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'HomeController@reports')->name('reports');
Route::post('/reports', 'HomeController@data')->name('reports');
Route::post('/importExport', 'HomeController@importExcel')->name('import');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);


Route::resource('items', 'ItemsController');
Route::get('items/{id}/delete', 'ItemsController@destroy');
Route::any('data/items', 'ItemsController@data');

//Route::resource('categories', 'CategoriesController');

Route::resource('cars', 'carsController');
Route::get('cars/{id}/delete', 'carsController@destroy');

Route::resource('clients', 'clientsController');
Route::get('clients/{id}/delete', 'clientsController@destroy');

Route::resource('invoices', 'InvoicesController');
Route::get('invoices/{id}/delete', 'InvoicesController@destroy');
Route::any('data/invoices', 'InvoicesController@data');

Route::resource('suppliers', 'SuppliersController');
Route::get('suppliers/{id}/delete', 'SuppliersController@destroy');

Route::resource('areas', 'AreasController');
Route::get('areas/{id}/delete', 'AreasController@destroy');


Route::get('api/supplier', function () {
    $input = Input::get('option');
    $maker = App\Supplier::find($input);
    $models = $maker->items();
    return Response::make($models->get(['id', 'name']));
});
Route::get('api/client', function () {
    $option = Input::get('option');
    $item_id = Input::get('item_id');
    $role = App\Client::find($option)->role;
    $price = App\Item::find($item_id)->$role;
    return Response::make(['price' => $price]);
});
