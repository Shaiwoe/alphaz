<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\StudyVideo;
use App\Models\Video;
use Illuminate\Http\Request;

class StudyVideoController extends Controller
{
    public function add(Video $video)
    {
        if (auth()->check()) {
            if ($video->checkUserStudy(auth()->id())) {
                alert()->warning('ویدیو مورد نظر به لیست مطالعه شده اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                StudyVideo::create([
                    'user_id' => auth()->id(),
                    'video_id' => $video->id
                ]);

                alert()->success('ویدیو مورد نظر به لیست مطالعه شده اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Video $video)
    {
        if (auth()->check()) {
            $study = StudyVideo::where('video_id', $video->id)->where('user_id', auth()->id())->firstOrFail();
            if ($study) {
                StudyVideo::where('video_id', $video->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('ویدیو مورد نظر از لیست  مطالعه شده حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
