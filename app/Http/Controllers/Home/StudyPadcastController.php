<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Padcast;
use App\Models\StudyPadcast;
use Illuminate\Http\Request;

class StudyPadcastController extends Controller
{
    public function add(Padcast $padcast)
    {
        if (auth()->check()) {
            if ($padcast->checkUserStudy(auth()->id())) {
                alert()->warning('پادکست مورد نظر به لیست مطالعه شده اضافه شده است', 'دقت کنید')->persistent('حله');
                return redirect()->back();
            } else {
                StudyPadcast::create([
                    'user_id' => auth()->id(),
                    'padcast_id' => $padcast->id
                ]);

                alert()->success('پادکست مورد نظر به لیست مطالعه شده اضافه شد', 'باتشکر');
                return redirect()->back();
            }
        } else {
            alert()->warning('برای افزودن به لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }


    public function remove(Padcast $padcast)
    {
        if (auth()->check()) {
            $study = StudyPadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->firstOrFail();
            if ($study) {
                StudyPadcast::where('padcast_id', $padcast->id)->where('user_id', auth()->id())->delete();
            }

            alert()->warning('پادکست مورد نظر از لیست  مطالعه شده حذف شد', 'باتشکر');
            return redirect()->back();
        } else {
            alert()->warning('برای حذف از لیست  مطالعه شده نیاز هست در ابتدا وارد سایت شوید', 'دقت کنید')->persistent('حله');
            return redirect()->back();
        }
    }
}
