<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('homepage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/Adminproducts',[HomeController::class, 'Adminproducts'])->name('Adminproducts');
    Route::get('/dashboard/Admincategories',[HomeController::class, 'Admincategories'])->name('AdminCategories');
    Route::get('/dashboard/AdminOrders',[HomeController::class, 'AdminOrders'])->name('AdminOrders');
});

Route::resources([
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'Cartitems' => \App\Http\Controllers\CartItemsController::class
]);
Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/contact',function(){
    return view('contact');
})->name('contact');
Route::get('/search', [ProductController::class, 'search'])->name('search');


require __DIR__.'/auth.php';