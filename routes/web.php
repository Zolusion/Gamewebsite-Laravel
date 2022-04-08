<?php

// use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Open as Open;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\EmailsController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SmsController;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;

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
    return view('homepage');
});
Route::get('/products/{product}', [Open\ProductController::class, 'show'])
    ->name('open.products.show');

Route::get('/products', [Open\ProductController::class, 'index'])
    ->name('open.products.index');

Route::group(['middleware' => ['role:customer|sales|admin']], function () {
    Route::get('admin/categories/{category}/delete', [Admin\CategoryController::class, 'delete'])
        ->name('categories.delete');
    Route::resource('/admin/categories', Admin\CategoryController::class);

    Route::get('admin/products/{product}/delete', [Admin\ProductController::class, 'delete'])
        ->name('products.delete');
    Route::resource('/admin/products', Admin\ProductController::class);
    Route::get('/search', [Open\ProductController::class, 'search']);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/overons', function () {
    return view('overons');
});

Route::get('/email', function () {
    Mail::to('rocketgames@info.nl')->send(new WelcomeMail);
    return new WelcomeMail();
});

Route::get('/email', [EmailsController::class, 'email']);
Route::get('/send-testenrollment', [TestsEnrollmentController::class, 'sendTestNotification']);
Route::get('/sms', [SmsController::class, 'index']);
Route::post('/products', [\App\Http\Controllers\CartController::class, 'cart'])
    ->name('cart.products');

//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Routes for shopping cart
//adding product to shopping cart
Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])
    ->name('product.addToCart');



require __DIR__ . '/auth.php';

