<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Market;
use App\Models\Padcast;
use App\Models\Study;
use App\Models\Video;
use App\Models\Wishlist;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class DashbordController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();
        $articles = Article::orderBy('created_at', 'desc')->where('is_active', 1)->take(4)->get();
        $studys = Study::where('user_id' , auth()->id())->take(4)->get();
        $likes = Like::where('user_id' , auth()->id())->take(4)->get();
        $wishlists = Wishlist::where('user_id' , auth()->id())->take(4)->get();
        return view('admin.dashboard', compact('users', 'articles', 'likes','studys','wishlists'));
    }

    public function add(Article $article)
    {
        if (auth()->check()) {
            if ($article->checkUserLike(auth()->id())) {
                alert()->warning('مقاله مورد نظر به لیست پسندیدها اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                Like::create([
                    'user_id' => auth()->id(),
                    'article_id' => $article->id
                ]);

                alert()->success('مقاله مورد نظر به لیست پسندیدها  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست پسندیدها  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Article $article)
    {
        if (auth()->check()) {
            $like = Like::where('article_id', $article->id)->where('user_id', auth()->id())->firstOrFail();
            if ($like) {
                Like::where('article_id', $article->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('مقاله مورد نظر از لیست پسندیدها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست پسندیدها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }



}
