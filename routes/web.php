<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::get('importExportView', [ProductController::class, 'importExportView']);
Route::get('export', [ProductController::class, 'export'])->name('export');
Route::post('import', [ProductController::class, 'import'])->name('import');

Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('tranc', App\Http\Controllers\TransactionsController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('report', App\Http\Controllers\OrderDetailController::class);
// Route::resource('report', App\Http\Controllers\ReporteController::class);
Route::get('/barcode', 'App\Http\Controllers\ProductController@GetProductBarcodes')->name('products.barcode');
Route::get('/search', 'App\Http\Controllers\TransactionsController@search')->name('search');
Route::resource('sections', App\Http\Controllers\SectionController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// cashier 
Route::get('/plans', 'App\Http\Controllers\PlanController@index')->name('plans.index');
Route::get('/plan/{plan}', 'App\Http\Controllers\PlanController@show')->name('plans.show');
Route::post('/subscription', 'App\Http\Controllers\SubscriptionController@create')->name('subscription.create');
// Route for create Plan 
// Route::get('create/plan', 'App\Http\Controllers\SubscriptionController@createPlan')->name('create.plan');
Route::post('store/plan', 'App\Http\Controllers\SubscriptionController@storePlan')->name('store.plan');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    
    Route::get('create/plan', [App\Http\Controllers\SubscriptionController::class, 'createPlan'])->name('create.plan');
});

Route::group(['as'=>'user.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Auth::routes(['verify' => true]);

Route::get('/chart/orders', [App\Http\Controllers\HomeController::class, 'orderChart'])->name('chart.orders');

Auth::routes();


