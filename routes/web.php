<?php

use Illuminate\Support\Facades\Route;
//WebSite 
use App\Http\Controllers\Site\Our_groupController ;
use App\Http\Controllers\Site\SuppliersController ;
use App\Http\Controllers\Site\NewsController ;
use App\Http\Controllers\Site\ContactController;

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
Route::post('/contactUsForm', [ContactController::class, 'contactUsForm']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/our_group', [Our_groupController ::class, 'index']);
Route::get('/suppliers', [SuppliersController ::class, 'index']);
Route::get('/news', [NewsController ::class, 'index']);