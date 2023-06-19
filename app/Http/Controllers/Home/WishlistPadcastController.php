<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Padcast;
use App\Models\WishlistPadcast;
use Illuminate\Http\Request;

class WishlistPadcastController extends Controller
{
    public function add(Padcast $padcast)
    {
        if (auth()->check()) {
            if ($padcast->checkUserWishlist(auth()->id())) {
                alert()->warning('پادکست مورد نظر به لیست علاقه مندی اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                WishlistPadcast::create([
                    'user_id' => auth()->id(),
                    'padcast_id' => $padcast->id
                ]);

                alert()->success('پادکست مورد نظر به لیست علاقه مندی  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست علاقه مندی  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Padcast $padcast)
    {
        if (auth()->check()) {
            $wishlist = WishlistPadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->firstOrFail();
            if ($wishlist) {
                WishlistPadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('پادکست مورد نظر از لیست علاقه مندی ها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست علاقه مندی ها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
