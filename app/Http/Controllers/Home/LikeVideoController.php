<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\LikeVideo;
use App\Models\Video;
use Illuminate\Http\Request;

class LikeVideoController extends Controller
{
    public function add(Video $video)
    {
        if (auth()->check()) {
            if ($video->checkUserLike(auth()->id())) {
                alert()->warning('ویدیو مورد نظر به لیست پسندیدها اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                LikeVideo::create([
                    'user_id' => auth()->id(),
                    'video_id' => $video->id
                ]);

                alert()->success('ویدیو مورد نظر به لیست پسندیدها  شما اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست پسندیدها  نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Video $video)
    {
        if (auth()->check()) {
            $like = LikeVideo::where('video_id', $video->id)->where('user_id', auth()->id())->firstOrFail();
            if ($like) {
                LikeVideo::where('video_id', $video->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('ویدیو مورد نظر از لیست پسندیدها شما حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست پسندیدها نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
