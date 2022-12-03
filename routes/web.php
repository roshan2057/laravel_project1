<?php
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'product'])->name('index');
Route::get('/home',[PageController::class,'home']);
Route::get('/product',[PageController::class,'product']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/signin',[PageController::class,'signin']);
Route::get('/signup',[PageController::class,'signup']);
Route::get('/add',[PageController::class,'add']);
Route::post('/product/store',[PageController::class,'storeproduct'])->name('product.store');

