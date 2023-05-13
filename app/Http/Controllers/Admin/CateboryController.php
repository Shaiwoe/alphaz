<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catebory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CateboryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cateborys = Catebory::latest()->paginate(100);
        return view('admin.cateborys.index', compact('cateborys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateborys = Catebory::where('parent_id', 0)->get();
        return view('admin.cateborys.create', compact('cateborys'));
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
            'slug' => 'required|unique:cateborys,slug',
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        Catebory::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد دسته بندی', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('دسته بندی مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('cateborys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catebory  $catebory
     * @return \Illuminate\Http\Response
     */
    public function show(Catebory $catebory)
    {
        return view('admin.cateborys.show', compact('catebory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catebory  $catebory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catebory $catebory)
    {
        $cateborys = Catebory::where('parent_id', 0)->get();
        return view('admin.cateborys.edit', compact('catebory', 'cateborys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catebory  $catebory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catebory $catebory)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:cateborys,slug,'.$catebory->id,
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $catebory->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش دسته بندی', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('دسته بندی مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('cateborys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catebory  $catebory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catebory $catebory)
    {
        //
    }
}
