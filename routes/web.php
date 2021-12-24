<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
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

Route::get('/', [proguct::class, 'index']);
Route::post('/add', [product::class, 'add']);
Route::get('/updateForm/{id}', [product::class, 'updateForm']);
Route::put('/updateProduct/{id}', [product::class, 'updateProduct']);
Route::delete('/delete/{id}', [product::class, 'delete']);
