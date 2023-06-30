<?php

namespace App\Http\Controllers\Admin;

use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        $webinars = Webinar::latest()->search()->paginate(20);
        return view('manager.webinars.index', compact('webinars','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        return view('manager.webinars.create' , compact('users'));
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
            'time' => 'required',
            'timer' => 'required',
            'date' => 'required',
            'link' => 'required',
            'is_active' => 'required',
            'body' => 'required',
            'primary_image' => 'required|mimes:jpg,jpeg,png,svg',

        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->primary_image->getClientOriginalName());
        $request->primary_image->move(public_path(env('WEBINARS_IMAGES_UPLOAD_PATH')), $fileNameImage);

        $webinar = Webinar::create([
            'title' => $request->title,
            'time' => $request->time,
            'timer' => $request->timer,
            'date' => $request->date,
            'link' => $request->link,
            'is_active' => $request->is_active,
            'body' => $request->body,
            'primary_image' => $fileNameImage,
        ]);


        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد وبینار', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('وبینار مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('webinars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Webinar $webinar, Request $request)
    {
        $users = $request->user();
        $webinars = Webinar::orderBy('updated_at', 'desc')->where('is_active', 1)->take(8)->get();
        return view('manager.webinar', compact('users' , 'webinars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinar $webinar , Request $request)
    {
        $users = $request->user();

        return view('manager.webinars.edit' , compact('webinar' , 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webinar $webinar)
    {
        $request->validate([
            'title' => 'required',
            'time' => 'required',
            'timer' => 'required',
            'link' => 'required',
            'date' => 'required',
            'is_active' => 'required',
            'body' => 'required',
            'primary_image' => 'nullable|mimes:jpg,jpeg,png,svg',

        ]);

        try {
            DB::beginTransaction();

            if ($request->has('primary_image')){
                $fileNameImage = generateFileName($request->primary_image->getClientOriginalName());
                $request->primary_image->move(public_path(env('WEBINARS_IMAGES_UPLOAD_PATH')), $fileNameImage);
            }

        $webinar->update([
            'title' => $request->title,
            'time' => $request->time,
            'timer' => $request->timer,
            'date' => $request->date,
            'link' => $request->link,
            'body' => $request->body,
            'is_active' => $request->is_active,
            'primary_image' => $request->has('primary_image') ? $fileNameImage : $webinar->primary_image,
        ]);



        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش وبینار', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('وبینار مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('webinars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinar $webinar)
    {
        $webinar->delete();

        alert()->success('وبینار مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('webinars.index');
    }
}
