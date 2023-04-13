<?php
//Admin
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\SuppliersAdminController;
use App\Http\Controllers\Admin\Our_groupAdminController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Admin\ImageAdminController;
use App\Http\Controllers\Admin\SettingsAdminController;

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


//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/adminLogout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/adminhome', function () {
            return view('admin.adminhome');
        })->name('adminDashboard');
        Route::resource('news-data', NewsAdminController::class);
        Route::resource('suppliers-data', SuppliersAdminController::class);
        Route::resource('group-data',Our_groupAdminController::class);
        Route::resource('image-data',ImageAdminController::class);
        Route::resource('settings',SettingsAdminController::class);
        


   

    });
});
//User
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Route::get('/employe/{id}', [TowerSiteController::class, 'employees']);
    //Route::post('/searchEmp', [TowerSiteController::class, 'searchEmp']);

});



//Language


Route::group(['prefix' => '{locale}','where' => ['locale' => '[a-z]{2}'],
'middleware' => 'setLocale'],
 function () {
    Route::get('/', function () {
        return view('welcome');
       })->name('/homepage');
   
    //Route::get('/aboutUs', [AboutUsSiteController::class, 'index'])->name('/aboutUs');

  
});