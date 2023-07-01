<?php

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\Google;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\FaqController;
use App\Http\Controllers\Admin\TabController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TapController;
use App\Http\Controllers\Admin\TavController;
use App\Http\Controllers\Admin\VipController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\MapsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\StudyController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ScoreController;

use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\PadcastController;
use App\Http\Controllers\Admin\WebinarController;
use App\Http\Controllers\Home\LikeBookController;
use App\Http\Controllers\Home\MetaversController;
use App\Http\Controllers\Home\WishlistController;
use App\Http\Controllers\Admin\CateboryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CateporyController;
use App\Http\Controllers\Admin\CatevoryController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\TagVideoController;
use App\Http\Controllers\Home\LikeVideoController;
use App\Http\Controllers\Home\StudyBookController;
use App\Http\Controllers\Home\CoinMarketController;
use App\Http\Controllers\Home\StudyVideoController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Home\CommentBookController;
use App\Http\Controllers\Home\LikePadcastController;
use App\Http\Controllers\Home\CommentVideoController;
use App\Http\Controllers\Home\StudyPadcastController;
use App\Http\Controllers\Home\WishlistBookController;
use App\Http\Controllers\Home\WishlistVideoController;
use App\Http\Controllers\Home\CommentPadcastController;
use App\Http\Controllers\Home\WishlistPadcastController;
use App\Http\Controllers\Home\TagController as HomeTagController;
use App\Http\Controllers\Home\TapController as HomeTapController;
use App\Http\Controllers\Home\BookController as HomeBookController;
use App\Http\Controllers\Home\VideoController as HomeVideoController;
use App\Http\Controllers\Admin\MarketController as AdminMarketController;
use App\Http\Controllers\Home\ArticleController as HomeArticleController;
use App\Http\Controllers\Home\CommentController as HomeCommentController;
use App\Http\Controllers\Home\PadcastController as HomePadcastController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Home\CateboryController as HomeCateboryController;
use App\Http\Controllers\Home\CategoryController as HomeCategoryController;
use App\Http\Controllers\Home\CateporyController as HomeCateporyController;
use App\Http\Controllers\Home\CatevoryController as HomeCatevoryController;
use App\Http\Controllers\Admin\MetaversController as AdminMetaversController;

Route::get('/coins/{page?}', [CoinMarketController::class, 'list'])->name('home.coins.index');
Route::get('/coin/{symbol}', [CoinMarketController::class, 'show'])->name('home.coins.show');

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/articles', [HomeArticleController::class, 'index'])->name('home.articles.index');
Route::get('/categories/{category:slug}', [HomeCategoryController::class, 'show'])->name('home.categories.show');
Route::get('/tags/{tag:slug}', [HomeTagController::class, 'show'])->name('home.tags.show');
Route::get('/articles/{article:slug}', [HomeArticleController::class, 'show'])->name('home.articles.show');

// Route::get('/articles/{article:slug}', [HomeArticleController::class, 'time'])->name('home.articles.time');


Route::get('/whislist/{article}', [WishlistController::class, 'add'])->name('home.whishlist.add');
Route::get('/whislist-romve/{article}', [WishlistController::class, 'remove'])->name('home.whishlist.remove');

Route::get('/wishlist-video/{video}', [WishlistVideoController::class, 'add'])->name('home.whishlistvideo.add');
Route::get('/wishlist-romve-video/{video}', [WishlistVideoController::class, 'remove'])->name('home.whishlistvideo.remove');

Route::get('/wishlist-padcast/{padcast}', [WishlistPadcastController::class, 'add'])->name('home.whishlistpadcast.add');
Route::get('/wishlist-romve-padcast/{padcast}', [WishlistPadcastController::class, 'remove'])->name('home.whishlistpadcast.remove');

Route::get('/wishlist-book/{book}', [WishlistBookController::class, 'add'])->name('home.whishlistbook.add');
Route::get('/wishlist-romve-book/{book}', [WishlistBookController::class, 'remove'])->name('home.whishlistbook.remove');

Route::get('/like/{article}', [DashbordController::class, 'add'])->name('home.like.add');
Route::get('/like-romve/{article}', [DashbordController::class, 'remove'])->name('home.like.remove');

Route::get('/like-video/{video}', [LikeVideoController::class, 'add'])->name('home.likevideo.add');
Route::get('/like-romve-video/{video}', [LikeVideoController::class, 'remove'])->name('home.likevideo.remove');

Route::get('/like-padcast/{padcast}', [LikePadcastController::class, 'add'])->name('home.likepadcast.add');
Route::get('/like-romve-padcast/{padcast}', [LikePadcastController::class, 'remove'])->name('home.likepadcast.remove');

Route::get('/like-book/{book}', [LikeBookController::class, 'add'])->name('home.likebook.add');
Route::get('/like-romve-book/{book}', [LikeBookController::class, 'remove'])->name('home.likebook.remove');

Route::get('/study/{article}', [StudyController::class, 'add'])->name('home.study.add');
Route::get('/study-romve/{article}', [StudyController::class, 'remove'])->name('home.study.remove');

Route::get('/study-video/{video}', [StudyVideoController::class, 'add'])->name('home.studyvideo.add');
Route::get('/study-romve-video/{video}', [StudyVideoController::class, 'remove'])->name('home.studyvideo.remove');

Route::get('/study-padcast/{padcast}', [StudyPadcastController::class, 'add'])->name('home.studypadcast.add');
Route::get('/study-romve-padcast/{padcast}', [StudyPadcastController::class, 'remove'])->name('home.studypadcast.remove');


Route::get('/study-book/{book}', [StudyBookController::class, 'add'])->name('home.studybook.add');
Route::get('/study-romve-book/{book}', [StudyBookController::class, 'remove'])->name('home.studybook.remove');

Route::get('/videos', [HomeVideoController::class, 'index'])->name('home.videos.index');
Route::get('/catevories/{catevory:slug}', [HomeCatevoryController::class, 'show'])->name('home.catevories.show');
Route::get('/videos/{video:slug}', [HomeVideoController::class, 'show'])->name('home.videos.show');

Route::get('/books', [HomeBookController::class, 'index'])->name('home.books.index');
Route::get('/books/{book:slug}', [HomeBookController::class, 'show'])->name('home.books.show');
Route::get('/catebories/{catebory:slug}', [HomeCateboryController::class, 'show'])->name('home.catebories.show');

Route::get('/padcasts', [HomePadcastController::class, 'index'])->name('home.padcasts.index');
Route::get('/taps/{tap:slug}', [HomeTapController::class, 'show'])->name('home.taps.show');
Route::get('/padcasts/{padcast:slug}', [HomePadcastController::class, 'show'])->name('home.padcasts.show');
Route::get('/catepories/{catepory:slug}', [HomeCateporyController::class, 'show'])->name('home.catepories.show');



Route::get('/metavers', [MetaversController::class, 'coins'])->name('home.metavers.index');
Route::get('/metavers/{metavers:id}/{slug}', [MetaversController::class, 'show'])->name('home.metavers.show');

Route::post('/comments/{article}', [HomeCommentController::class, 'store'])->name('home.comments.store');

Route::post('/comments-video/{video}', [CommentVideoController::class, 'store'])->name('home.commentsvideo.store');

Route::post('/comments-padcast/{padcast}', [CommentPadcastController::class, 'store'])->name('home.commentspadcast.store');

Route::post('/comments-book/{book}', [CommentBookController::class, 'store'])->name('home.commentsbook.store');

Route::get('/about', [AboutController::class, 'index'])->name('home.about');
Route::get('/faq', [FaqController::class, 'index'])->name('home.faq');
Route::get('/contact', [ContactController::class, 'index'])->name('home.contact');

Route::get('/auth/google', [Google::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\Google::class, 'callback']);

Route::get('/auth/{provider}', [AuthController::class, 'redirect'])->name('auth.provider');
Route::get('/auth/{provider}/callback', [AuthController::class, 'callback']);




Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/managers', [ManagerController::class, 'index'])->middleware(['permission:Manager'])->name('managers');
    Route::resource('categories', CategoryController::class)->middleware(['permission:New']);
    Route::resource('cateporys', CateporyController::class)->middleware(['permission:Padcast']);
    Route::resource('catevorys', CatevoryController::class)->middleware(['permission:Video']);
    Route::resource('cateborys', CateboryController::class)->middleware(['permission:Book']);
    Route::resource('tags', TagController::class)->middleware(['permission:New']);
    Route::resource('tavs', TavController::class)->middleware(['permission:New']);
    Route::resource('taps', TapController::class)->middleware(['permission:New']);
    Route::resource('tabs', TabController::class)->middleware(['permission:New']);
    Route::resource('articles', ArticleController::class)->middleware(['permission:New']);
    Route::resource('banners', BannerController::class)->middleware(['permission:Banner']);
    Route::resource('padcasts', PadcastController::class)->middleware(['permission:Padcast']);
    Route::resource('videos', VideoController::class)->middleware(['permission:Video']);
    Route::resource('books', BookController::class)->middleware(['permission:Book']);
    Route::resource('webinars', WebinarController::class)->middleware(['permission:Webinar']);
    Route::resource('users', userController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('comments', CommentController::class);
    Route::get('/comments/{comment}/change-approve', [CommentController::class, 'ChangeApprove'])->name('comments.change');
    Route::post('ckeditor/upload', [ArticleController::class, 'upload'])->name('ckeditor.upload');
});


Route::get('/dashboard', [DashbordController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/maps', [MapsController::class, 'index'])->middleware(['auth', 'verified'])->name('maps');
Route::get('/vip', [VipController::class, 'index'])->middleware(['auth', 'verified'])->name('vip');
Route::get('/score', [ScoreController::class, 'index'])->middleware(['auth', 'verified'])->name('score');
Route::get('/question', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('question');
Route::get('/wishlist', [WishlistController::class, 'userProfile'])->middleware(['auth', 'verified'])->name('wishlist');
Route::get('/webinar', [WebinarController::class, 'show'])->middleware(['auth', 'verified'])->name('webinar');
Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');



require __DIR__ . '/auth.php';
