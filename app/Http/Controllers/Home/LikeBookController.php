<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\LikeBook;
use Illuminate\Http\Request;

class LikeBookController extends Controller
{
    public function add(Book $book)
    {
        if (auth()->check()) {
            if ($book->checkUserLike(auth()->id())) {
                alert()->warning('کتاب مورد نظر به لیست پسندیدها اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                LikeBook::create([
                    'user_id' => auth()->id(),
                    'book_id' => $book->id
                ]);

                alert()->success('کتاب مورد نظر به لیست پسندیدها  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست پسندیدها  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Book $book)
    {
        if (auth()->check()) {
            $like = LikeBook::where('book_id', $book->id)->where('user_id', auth()->id())->firstOrFail();
            if ($like) {
                LikeBook::where('book_id', $book->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('کتاب مورد نظر از لیست پسندیدها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست پسندیدها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
