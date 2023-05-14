<?php

use App\Http\Controllers\Auth\Google;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\FaqController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Home\MarketController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PadcastController;
use App\Http\Controllers\Admin\CateboryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CateporyController;
use App\Http\Controllers\Admin\CatevoryController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Home\BookController as HomeBookController;
use App\Http\Controllers\Home\VideoController as HomeVideoController;
use App\Http\Controllers\Admin\MarketController as AdminMarketController;
use App\Http\Controllers\Home\ArticleController as HomeArticleController;
use App\Http\Controllers\Home\PadcastController as HomePadcastController;
use App\Http\Controllers\Home\CategoryController as HomeCategoryController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/dashboard', [DashbordController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/articles', [HomeArticleController::class, 'index'])->name('home.articles.index');
Route::get('/categories/{category:slug}', [HomeCategoryController::class, 'show'])->name('home.categories.show');
Route::get('/articles/{article:slug}', [HomeArticleController::class, 'show'])->name('home.articles.show');

Route::get('/videos', [HomeVideoController::class, 'index'])->name('home.videos.index')->middleware(['permission:1']);
Route::get('/videos/{video:slug}', [HomeVideoController::class, 'show'])->name('home.videos.show')->middleware(['permission:1']);

Route::get('/books', [HomeBookController::class, 'index'])->name('home.books.index')->middleware(['permission:1']);
Route::get('/books/{book:slug}', [HomeBookController::class, 'show'])->name('home.books.show')->middleware(['permission:1']);

Route::get('/padcasts', [HomePadcastController::class, 'index'])->name('home.padcasts.index')->middleware(['permission:1']);
Route::get('/padcasts/{padcast:slug}', [HomePadcastController::class, 'show'])->name('home.padcasts.show')->middleware(['permission:1']);



Route::get('/prices', [MarketController::class, 'coins'])->name('home.prices.index');
Route::get('/prices/{market:id}/{slug}', [MarketController::class, 'show'])->name('home.prices.show');
// Route::post('ckeditor/upload', [MarketController::class,'upload'])->name('ckeditor.upload');

// Route::get('/coins', [MarketController::class, 'coins'])->name('home.coins');

Route::get('/about', [AboutController::class, 'index'])->name('home.about');
Route::get('/faq', [FaqController::class, 'index'])->name('home.faq');
Route::get('/contact', [ContactController::class, 'index'])->name('home.contact');

Route::get('/auth/google' , [Google::class , 'redirect'])->name('auth.google');
Route::get('/auth/google/callback' , [App\Http\Controllers\Auth\Google::class , 'callback']);

Route::get('/auth/{provider}' , [AuthController::class , 'redirect'])->name('auth.provider');
Route::get('/auth/{provider}/callback' , [AuthController::class , 'callback']);




Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('categories', CategoryController::class)->middleware(['permission:New']);
    Route::resource('cateporys', CateporyController::class)->middleware(['permission:Padcast']);
    Route::resource('catevorys', CatevoryController::class)->middleware(['permission:Video']);
    Route::resource('cateborys', CateboryController::class)->middleware(['permission:Book']);
    Route::resource('charts', ChartController::class)->middleware(['permission:Chart']);
    Route::resource('tags', TagController::class)->middleware(['permission:New']);
    Route::resource('articles', ArticleController::class)->middleware(['permission:New']);
    Route::resource('banners', BannerController::class)->middleware(['permission:Banner']);
    Route::resource('markets', AdminMarketController::class)->middleware(['permission:Prices']);
    Route::resource('padcasts', PadcastController::class)->middleware(['permission:Padcast']);
    Route::resource('videos', VideoController::class)->middleware(['permission:Video']);
    Route::resource('books', BookController::class)->middleware(['permission:Book']);
    Route::resource('users', userController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);

    Route::post('ckeditor/upload', [ArticleController::class,'upload'])->name('ckeditor.upload');
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
