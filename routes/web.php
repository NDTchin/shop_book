<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MenuController;

use App\Http\Controllers\Client\AuthorInformationController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ShopCartController;
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

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/',[MainController::class, 'index']) -> name('admin');
        Route::get('main',[MainController::class, 'index']);

        #Menus
        Route::prefix('menus')->group(function () {
            Route::get('add',[MenuController::class,'create']);
            Route::post('add',[MenuController::class,'store']);
            Route::get('list',[MenuController::class,'index']);

            Route::get('search', [MenuController::class, 'search'])->name('search');

            Route::get('edit/{menu}',[MenuController::class,'show']);
            Route::post('edit/{menu}',[MenuController::class,'update']);

            Route::get('destroy/{id}',[MenuController::class,'destroy']);
        });
    });

    //Route::Client

});

//Route::Client
Route::view('/', 'main.index');
Route::view('/about', 'main.about');

//Route::view('/shop', 'main.shop');
Route::get('/shop', [ProductController::class,'index'])->name('main.shop');

// search
Route::get('/shop-cart/search', [ShopCartController::class, 'search'])->name('shop-cart.search');


Route::view('/404', 'main.404');
Route::view('/checkout', 'main.checkout');
Route::view('/contact', 'main.contact');
Route::view('/faq', 'main.faq');

Route::view('/index', 'main.index');
//Route::get('/index', [ProductController::class,'home_index'])->name('main.index');

Route::view('/index-2', 'main.index-2');

//Route::view('/news', 'main.news');
Route::get('/news', [ EventController::class, 'index']) -> name('main.news'); // done

Route::view('/news-details', 'main.news-details');
Route::view('/news-grid', 'main.news-grid');

//Route::view('/shop-details', 'main.shop-details');
Route::get('/shop-details/{id}', [ProductController::class, 'shop_details']);

Route::view('/shop-list', 'main.shop-list');
//Route::get('/shop-list', [ProductController::class,'index'])->name('main.shop-list');

Route::view('/wishlist', 'main.wishlist');


//Route::view('/shop-cart', 'main.shop-cart');
Route::get('/shop-cart', [ShopCartController::class, 'show']);
Route::post('/shop-cart/add', [ShopCartController::class, 'add'])->name('main.shop-cart');
Route::get('/shop-cart/update', [ShopCartController::class, 'update'])->name('shop-cart.update');
Route::get('/shop-cart/remove', [ShopCartController::class, 'remove']);

//Route::view('/team', 'main.team'); // done
Route::get('/team', [AuthorInformationController::class, 'index']) -> name('main.team'); // done
//Route::view('/team-details', 'main.team-details'); // done
Route::get('/team-details', [AuthorInformationController::class, 'showTeamDetails']) -> name('main.team-details'); // done

