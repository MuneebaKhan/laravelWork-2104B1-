<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\Employee;


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

Route::get('/xyz', function () {
    return view('welcome');
});

Route::get('/', function () {
    //root
    return '<h1>Welcome to the Simple App HomePage</h1>';
});

Route::get('/About/{name}/{id?}', function ($name, $id = null) {
    return view('About', ['name' => $name, 'id' => $id]);
});

Route::get('/Contact/{name?}', function ($name = null) {
    $demo = '<h3>hello Demo</h3>';

    $data = compact('name', 'demo');

    return view('Contact')->with($data);
});

Route::get('/show', 'Employee@Show');

Route::resource('/products', 'Product');

Route::get('/xyz', [Employee::class,'ShowEmp']);

