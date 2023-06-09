<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        $tags = Tag::latest()->paginate(50);
        return view('manager.tags.index', compact('tags','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        return view('manager.tags.create' , compact('users'));
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
            'title' => 'required|unique:tags,title',
            'slug' => 'required|unique:tags,slug',
        ]);

        try {
            DB::beginTransaction();

        Tag::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد تگ ها', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        Alert::success('عنوان موفقیت', 'تگ با موفقیت ایجاد شد');
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag, Request $request)
    {
        $users = $request->user();
        return view('manager.tags.show' , compact('tag', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag, Request $request)
    {
        $users = $request->user();
        return view('manager.tags.edit' , compact('tag','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $tag->update([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد تگ ها', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        Alert::success('عنوان موفقیت', 'تگ با موفقیت ویرایش شد');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
