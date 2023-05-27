<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function add(Article $article)
    {
        if (auth()->check()) {
            if ($article->checkUserWishlist(auth()->id())) {
                alert()->warning('مقاله مورد نظر به لیست علاقه مندی اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                Wishlist::create([
                    'user_id' => auth()->id(),
                    'article_id' => $article->id
                ]);

                alert()->success('مقاله مورد نظر به لیست علاقه مندی  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست علاقه مندی  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Article $article)
    {
        if (auth()->check()) {
            $wishlist = Wishlist::where('article_id', $article->id)->where('user_id', auth()->id())->firstOrFail();
            if ($wishlist) {
                Wishlist::where('article_id', $article->id)->where('user_id', auth()->id())->delete();
            }

            alert()->success('مقاله مورد نظر از لیست علاقه مندی ها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست علاقه مندی ها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function userProfile(Request $request)
    {
        $users = $request->user();

        $wishlist = Wishlist::where('user_id' , auth()->id())->get();
        return view('admin.wishlist' , compact('wishlist', 'users'));
    }
}
