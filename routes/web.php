<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Handler\HandlerAuthentication;
use App\Http\Controllers\Handler\HandlerCatalog;
use App\Http\Controllers\Handler\HandlerHome;

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
Route::get('/token', function () {
    return csrf_token();
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register your handler
| to consume endpoint from backend
|
*/
Route::get('/', [HandlerHome::class, 'index'])->name('view.home');
Route::get('/sign-in', [HandlerAuthentication::class, 'signIn'])->name('view.sign-in');
Route::post('/login', [HandlerAuthentication::class, 'login']);
Route::get('/sign-up', [HandlerAuthentication::class, 'signUp'])->name('view.sign-up');
Route::post('/register', [HandlerAuthentication::class, 'register']);
Route::get('/forgot-password', [HandlerAuthentication::class, 'forgotPassword']);
Route::get('/catalog', [HandlerCatalog::class, 'index'])->name('view.catalog');


/*
|--------------------------------------------------------------------------
| Web API
|--------------------------------------------------------------------------
|
| Here is where you can register your endpoint
|
*/
Route::group(['prefix' => 'api'], function()
// Route::group(['prefix' => 'api',  'middleware' => 'auth'], function()
{
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
});
