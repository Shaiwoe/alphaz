<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tav;
use App\Models\Video;
use App\Models\Catevory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();

        $videos = Video::latest()->paginate(20);
        return view('manager.videos.index', compact('videos','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        $tags = Tav::all();
        $catevorys = Catevory::all();
        return view('manager.videos.create', compact('catevorys','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Video $video)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:videos,slug',
            'catevory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
            'video' => 'nullable|mimes:mp4,mkv,mov,avi,wmv,avc',
            'tag_ids' => 'required',
            'youtube' => 'nullable',
            'aparat' => 'nullable',

        ]);

        try {
            DB::beginTransaction();

            $fileNameImage = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('VIDEO_IMAGES_UPLOAD_PATH')), $fileNameImage);

            if ($request->has('video') && $request->video !== null) {
                $fileNameVideo = generateFileName($request->video->getClientOriginalName());
                $request->video->move(public_path(env('VIDEO_VIDEO_UPLOAD_PATH')), $fileNameVideo);
            }


            Video::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'catevory_id' => $request->catevory_id,
                'type' => $request->type,
                'description' => $request->description,
                'body' => $request->body,
                'image' => $fileNameImage,
                'video' => $request->video !== null ? $fileNameVideo : $video->video,
                'time' => $request->time,
                'youtube' => $request->youtube,
                'aparat' => $request->aparat,
                'is_active' => $request->is_active,
            ]);


            $video->tavs()->attach($request->tag_ids);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد ویدیو', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('ویدیو مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video, Request $request)
    {
        $users = $request->user();
        return view('manager.videos.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video, Request $request)
    {
        $users = $request->user();

        $catevorys = Catevory::all();
        return view('manager.videos.edit', compact('video', 'catevorys','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'catevory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'video' => 'nullable|mimes:mp4,mkv,mov,avi,wmv,avc',
            'tags' => 'required',
            'aparat' => 'nullable',
            'youtube' => 'nullable',
        ]);

        try {
            DB::beginTransaction();

            if ($request->has('image')) {
                $fileNameImage = generateFileName($request->image->getClientOriginalName());
                $request->image->move(public_path(env('VIDEO_IMAGES_UPLOAD_PATH')), $fileNameImage);
            }

            if ($request->has('video')) {
                $fileNameVideo = generateFileName($request->video->getClientOriginalName());
                $request->video->move(public_path(env('VIDEO_VIDEO_UPLOAD_PATH')), $fileNameVideo);
            }



            $video->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'catevory_id' => $request->catevory_id,
                'type' => $request->type,
                'description' => $request->description,
                'body' => $request->body,
                'image' => $request->has('image') ? $fileNameImage : $video->image,
                'video' => $request->has('video') ? $fileNameVideo : $video->video,
                'time' => $request->time,
                'tags' => $request->tags,
                'youtube' => $request->youtube,
                'aparat' => $request->aparat,
                'is_active' => $request->is_active,
            ]);


            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش ویدیو', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('ویدیو مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        alert()->success('ویدیو مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('videos.index');
    }
}
