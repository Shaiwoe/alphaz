<?php

namespace App\Http\Controllers\Admin;

use App\Models\Padcast;
use App\Models\Catepory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = $request->user();
        $padcasts = Padcast::latest()->paginate(20);
        return view('admin.padcasts.index', compact('padcasts', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        $cateporys = Catepory::where('parent_id', '!=' , 0)->get();

        return view('admin.padcasts.create' , compact('cateporys','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'catepory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
            'voice' => 'required|mimes:mp3,wav,pcm,raw,ogg,wma',
            'tags' => 'required',

        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->image->getClientOriginalName());
        $request->image->move(public_path(env('PADCAST_IMAGES_UPLOAD_PATH')), $fileNameImage);

        $fileNameVoice = generateFileName($request->voice->getClientOriginalName());
        $request->voice->move(public_path(env('PADCAST_VOICE_UPLOAD_PATH')), $fileNameVoice);


        Padcast::create([
            'title' => $request->title,
            'catepory_id' => $request->catepory_id,
            'type' => $request->type,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $fileNameImage,
            'voice' => $fileNameVoice,
            'time' => $request->time,
            'tags' => $request->tags,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد پادکست', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('پادکست مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('padcasts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padcast  $padcast
     * @return \Illuminate\Http\Response
     */
    public function show(Padcast $padcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padcast  $padcast
     * @return \Illuminate\Http\Response
     */
    public function edit(Padcast $padcast , Request $request)
    {
        $users = $request->user();
        $cateporys = Catepory::where('parent_id', '!=' , 0)->get();
        return view('admin.padcasts.edit' , compact('padcast' , 'cateporys', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padcast  $padcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Padcast $padcast)
    {
        $request->validate([
            'title' => 'required',
            'catepory_id' => 'required',
            'type' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'voice' => 'nullable|mimes:mp3,wav,pcm,raw,ogg,wma',
            'tags' => 'required',

        ]);

        try {
            DB::beginTransaction();

        if ($request->has('image')){
            $fileNameImage = generateFileName($request->image->getClientOriginalName());
            $request->image->move(public_path(env('PADCAST_IMAGES_UPLOAD_PATH')), $fileNameImage);
        }

        if ($request->has('voice')){
            $fileNameVoice = generateFileName($request->voice->getClientOriginalName());
            $request->voice->move(public_path(env('PADCAST_VOICE_UPLOAD_PATH')), $fileNameVoice);
        }


        $padcast->update([
            'title' => $request->title,
            'catepory_id' => $request->catepory_id,
            'type' => $request->type,
            'description' => $request->description,
            'body' => $request->body,
            'image' => $request->has('image') ? $fileNameImage : $padcast->image,
            'voice' => $request->has('voice') ? $fileNameVoice : $padcast->voice,
            'time' => $request->time,
            'tags' => $request->tags,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش پادکست', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('پادکست مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('padcasts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padcast  $padcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padcast $padcast)
    {
        $padcast->delete();

        alert()->success('پادکست مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('padcasts.index');
    }
}
