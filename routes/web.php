<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\App;
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

Route::get('/locale/{locale?}', function ($locale) {
        session()->put('locale',$locale);
        App::setLocale($locale);

        return redirect()->back();
});

Route::group(['middleware' => ['auth']], function() { //Routes that can be accessed when logged in
    Route::get('/item/{id}', [ItemController::class, 'productDetails']);
    Route::post('/item/{id}', [ItemController::class, 'productDetails']);
    Route::post('/AddToCart/{id}', [OrderController::class, 'addtoCart']);
    Route::post('/DeleteCart/{id}', [OrderController::class, 'removefromCart']);
    Route::post('/Checkout', [OrderController::class, 'checkout']);
    Route::get('/cart',[OrderController::class, 'showCart']);
    Route::get('/profile', [ProfileController::class, 'edit']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::get('/warning', function(){
        return view('cart.warning');
    });

});

// Route::group(['middleware' => 'admin'], function(){

    Route::get('/management', [AccountController::class, 'showData']);
    Route::get('/updaterole/{id}', [AccountController::class, 'changeRole']);
    Route::post('/updaterole/{id}', [AccountController::class, 'updateRole']);
    Route::post('/deleteuser/{id}', [AccountController::class, 'deleteuser']);
// });





Route::get('/home', [HomeController::class, 'showData']);

Route::get('/login', function () {
    return view('authentication.login');
});

Route::get('/register', function () {
    return view('authentication.signup');
});

Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
