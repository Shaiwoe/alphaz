<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\WishlistBook;
use Illuminate\Http\Request;

class WishlistBookController extends Controller
{
    public function add(Book $book)
    {
        if (auth()->check()) {
            if ($book->checkUserWishlist(auth()->id())) {
                alert()->warning('کتاب مورد نظر به لیست علاقه مندی اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                WishlistBook::create([
                    'user_id' => auth()->id(),
                    'book_id' => $book->id
                ]);

                alert()->success('کتاب مورد نظر به لیست علاقه مندی  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست علاقه مندی  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Book $book)
    {
        if (auth()->check()) {
            $wishlist = WishlistBook::where('book_id', $book->id)->where('user_id', auth()->id())->firstOrFail();
            if ($wishlist) {
                WishlistBook::where('book_id', $book->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('کتاب مورد نظر از لیست علاقه مندی ها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست علاقه مندی ها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
