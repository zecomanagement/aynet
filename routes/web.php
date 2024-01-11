<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SeedlingController;

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
    return view('admin.frontend.member_home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


Route::get('/order/seed/type/details/{id}', [SeedlingController::class, 'getuPrice']);
Route::get('/order/proj/details/{id}', [ProjectController::class, 'getPpa']);
Route::prefix('users')->middleware('auth')->name('')->group(base_path('routes/web/user.php'));
Route::prefix('member')->name('')->group(base_path('routes/web/member.php'));
Route::prefix('consumer')->group(base_path('routes/web/consumer.php'));
Route::prefix('vf')->name('')->group(base_path('routes/web/vf.php'));
Route::prefix('profile')->middleware('auth')->name('')->group(base_path('routes/web/profile.php'));
Route::prefix('setup')->name('')->group(base_path('routes/web/setup.php'));
Route::prefix('order')->middleware('auth')->name('')->group(base_path('routes/web/order.php'));
Route::prefix('product')->group(base_path('routes/web/product.php'));
Route::prefix('accounts')->middleware('auth')->name('')->group(base_path('routes/web/account.php'));
Route::prefix('cart')->name('')->group(base_path('routes/web/cart.php'));
Route::prefix('visit')->name('')->group(base_path('routes/web/visit.php'));
Route::prefix('prep')->name('')->group(base_path('routes/web/prep.php'));
Route::prefix('extension')->name('')->group(base_path('routes/web/ext.php'));
Route::prefix('endproduct')->name('')->group(base_path('routes/web/endProduct.php'));
Route::prefix('trees')->name('')->group(base_path('routes/web/trees.php'));
Route::prefix('sales')->name('')->group(base_path('routes/web/sales.php'));
Route::prefix('home')->name('')->group(base_path('routes/web/homePage.php'));
Route::prefix('test')->name('')->group(base_path('routes/web/test.php'));
