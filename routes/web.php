<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/login',  function () {
  return redirect('/?login=true');
});
Route::get('/register',  function () {
  return redirect('/?register=true');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
  Route::post('/login', [App\Http\Controllers\admin\LoginController::class, 'doLogin'])->name('login');
  Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('.dashboard');
  //role-premission
  Route::controller(\App\Http\Controllers\admin\RoleController::class)
    ->prefix('role')->group(function () {
      Route::get('/', 'index')->name('role');
      Route::get('/add-role', 'create')->name('role.create');
      Route::post('/store', 'store')->name('role.store');
      Route::get('/edit/{id}', 'edit')->name('role.edit');
      Route::put('/update/{id}', 'update')->name('role.update');
      Route::delete('/destory/{id}', 'destory')->name('role.destory');
    });
  //categories
  Route::controller(\App\Http\Controllers\admin\CategoryController::class)
    ->prefix('category')->group(function () {
      Route::get('/', 'index')->name('category');
      Route::get('/add', 'add')->name('category.add');
      Route::post('/store', 'store')->name('category.store');
      Route::get('/edit/{id}', 'edit')->name('category.edit');
      Route::put('/update/{id}', 'update')->name('category.update');
      Route::delete('/destory/{id}', 'destory')->name('category.destory');
    });
  //coupons
  Route::controller(\App\Http\Controllers\admin\CouponController::class)
    ->prefix('coupon')->group(function () {
      Route::get('/', 'index')->name('coupon');
      Route::get('/add', 'add')->name('coupon.add');
      Route::post('/store', 'store')->name('coupon.store');
      Route::get('/edit/{id}', 'edit')->name('coupon.edit');
      Route::put('/update/{id}', 'update')->name('coupon.update');
      Route::delete('/destory/{id}', 'destory')->name('coupon.destory');
    });
  //set
  Route::controller(\App\Http\Controllers\admin\SetController::class)
    ->prefix('set')->group(function () {
      Route::get('/', 'index')->name('set');
      Route::get('/add', 'add')->name('set.add');
      Route::post('/store', 'store')->name('set.store');
      Route::get('/edit/{id}', 'edit')->name('set.edit');
      Route::put('/update/{id}', 'update')->name('set.update');
      Route::delete('/destory/{id}', 'destory')->name('set.destory');
    });
  //style
  Route::controller(\App\Http\Controllers\admin\StyleController::class)
    ->prefix('style')->group(function () {
      Route::get('/', 'index')->name('style');
      Route::get('/add', 'add')->name('style.add');
      Route::post('/store', 'store')->name('style.store');
      Route::get('/edit/{id}', 'edit')->name('style.edit');
      Route::put('/update/{id}', 'update')->name('style.update');
      Route::delete('/destory/{id}', 'destory')->name('style.destory');
    });
  // collection
  Route::controller(\App\Http\Controllers\admin\CollectionController::class)
    ->prefix('collection')->group(function () {
      Route::get('/', 'index')->name('collection');
      Route::get('/add', 'add')->name('collection.add');
      Route::post('/store', 'store')->name('collection.store');
      Route::get('/edit/{id}', 'edit')->name('collection.edit');
      Route::put('/update/{id}', 'update')->name('collection.update');
      Route::delete('/destory/{id}', 'destory')->name('collection.destory');
    });
  // products
  Route::controller(\App\Http\Controllers\admin\ProductController::class)
    ->prefix('product')->group(function () {
      Route::get('/', 'index')->name('product');
      Route::get('/add', 'add')->name('product.add');
      Route::post('/store', 'store')->name('product.store');
      Route::get('/edit/{id}', 'edit')->name('product.edit');
      Route::put('/update/{id}', 'update')->name('product.update');
      Route::delete('/destory/{id}', 'destory')->name('product.destory');
    });
  // variants
  Route::controller(\App\Http\Controllers\admin\VariantController::class)
    ->prefix('variant')->group(function () {
      Route::get('/', 'index')->name('variant');
      Route::get('/add', 'add')->name('variant.add');
      Route::post('/store', 'store')->name('variant.store');
      Route::get('/edit/{id}', 'edit')->name('variant.edit');
      Route::put('/update/{id}', 'update')->name('variant.update');
      Route::delete('/destory/{id}', 'destory')->name('variant.destory');
    });
  // gallery
  Route::controller(\App\Http\Controllers\admin\UploadController::class)
    ->prefix('gallery')->group(function () {
      Route::get('/', 'index')->name('gallery');
      Route::get('/add', 'add')->name('gallery.add');
      Route::post('/store', 'store')->name('gallery.store');
      Route::get('/edit/{id}', 'edit')->name('gallery.edit');
      Route::put('/update/{id}', 'update')->name('gallery.update');
      Route::delete('/destory/{id}', 'destory')->name('gallery.destory');
    });
  // profile
  Route::controller(\App\Http\Controllers\admin\ProfileController::class)
    ->prefix('profile')->group(function () {
      Route::get('/', 'index')->name('profile');
      Route::get('/add', 'add')->name('profile.add');
      Route::post('/store', 'store')->name('profile.store');
      Route::get('/edit/{id}', 'edit')->name('profile.edit');
      Route::put('/update/{id}', 'update')->name('profile.update');
      Route::delete('/destory/{id}', 'destory')->name('profile.destory');
    });

  //carts routes
});
Route::get('/addedcart/{id}', [App\Http\Controllers\frontend\CartController::class, 'add'])->name('addcart');
Route::get('/cart', [App\Http\Controllers\frontend\CartController::class, 'index'])->name('cart');
Route::get('/cart', [App\Http\Controllers\frontend\CartController::class, 'cartlist'])->name('cart.list');
Route::get('/remmove/{id}', [App\Http\Controllers\frontend\CartController::class, 'removecart'])->name('remove');
Route::get('/checkout', [\App\Http\Controllers\frontend\CheckoutController::class, 'index'])->name('checkout');
Route::get('/wishlist', [App\Http\Controllers\frontend\WishlistController::class, 'index'])->name('wishlist');
Route::post('/update_wishlist', [App\Http\Controllers\frontend\WishlistController::class, 'update_wishlist']);
Route::get('/load-wish-data', [App\Http\Controllers\frontend\WishlistController::class, 'updatecount']);
Route::delete('/wishlist/{id}', [App\Http\Controllers\frontend\WishlistController::class, 'remove_item'])->name('wish.destroy');
Route::post('/your-order-placed', [\App\Http\Controllers\frontend\CheckoutController::class, 'placeorder'])->name('checkout.placeorder');

Route::post('/subscribed', [App\Http\Controllers\frontend\ContactController::class, 'subscription_box'])->name('abc');
// general routes
Route::name('web.')->group(function () {
  Route::get('/', [App\Http\Controllers\frontend\IndexController::class, 'index'])->name('home');
  Route::get('/about', [App\Http\Controllers\frontend\AboutController::class, 'index'])->name('about');
  Route::get('/contact', [App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact');
  Route::post('/inquiry', [App\Http\Controllers\frontend\ContactController::class, 'store'])->name('inquiry');

  Route::get('/faq', [App\Http\Controllers\frontend\FaqsController::class, 'index'])->name('faq');
  Route::get('/policy', [App\Http\Controllers\frontend\PolicyController::class, 'index'])->name('policy');

  // Route::name('products')->prefix('products')->group(function () {
  //   Route::get('/', [App\Http\Controllers\frontend\ProductController::class, 'index']);
  // });

  Route::get('/search', [App\Http\Controllers\frontend\ProductController::class, 'search'])->name('search');
  Route::get('/products', [App\Http\Controllers\frontend\ProductController::class, 'index'])->name('products');
  Route::get('collection/{slug}', [\App\Http\Controllers\frontend\CollectionController::class, 'index'])->name('collection');
  Route::get('view-set/{slug}', [\App\Http\Controllers\frontend\CollectionController::class, 'set_products'])->name('sets');
  Route::get('product-by-style/{slug}', [\App\Http\Controllers\frontend\CollectionController::class, 'product_style'])->name('sets');
  Route::get('single-product/{slug}', [\App\Http\Controllers\frontend\ProductDetail::class, 'singleProduct'])->name('single-product');
  Route::get('view-category/{slug}', [\App\Http\Controllers\frontend\ProductDetail::class, 'category_product']);
  Route::get('/detail', [\App\Http\Controllers\frontend\ProductDetail::class, 'index']);
});
