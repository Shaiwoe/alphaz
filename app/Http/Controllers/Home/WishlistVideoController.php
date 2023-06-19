<?php

namespace App\Http\Controllers\Home;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WishlistVideo;

class WishlistVideoController extends Controller
{
    public function add(Video $video)
    {
        if (auth()->check()) {
            if ($video->checkUserWishlist(auth()->id())) {
                alert()->warning('ویدیو مورد نظر به لیست علاقه مندی اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                WishlistVideo::create([
                    'user_id' => auth()->id(),
                    'video_id' => $video->id
                ]);

                alert()->success('ویدیو مورد نظر به لیست علاقه مندی  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست علاقه مندی  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Video $video)
    {
        if (auth()->check()) {
            $wishlist = WishlistVideo::where('video_id', $video->id)->where('user_id', auth()->id())->firstOrFail();
            if ($wishlist) {
                WishlistVideo::where('video_id', $video->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('ویدیو مورد نظر از لیست علاقه مندی ها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست علاقه مندی ها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
