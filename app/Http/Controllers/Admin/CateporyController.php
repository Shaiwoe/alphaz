<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catepory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CateporyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        $cateporys = Catepory::latest()->paginate(100);
        return view('admin.cateporys.index', compact('cateporys','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateporys = Catepory::where('parent_id', 0)->get();
        return view('admin.cateporys.create', compact('cateporys'));
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
            'slug' => 'required|unique:cateporys,slug',
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        Catepory::create([
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
        return redirect()->route('cateporys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catepory  $catepory
     * @return \Illuminate\Http\Response
     */
    public function show(Catepory $catepory)
    {
        return view('admin.cateporys.show', compact('catepory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catepory  $catepory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catepory $catepory)
    {
        $cateporys = Catepory::where('parent_id', 0)->get();
        return view('admin.cateporys.edit', compact('catepory', 'cateporys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catepory  $catepory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catepory $catepory)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:cateporys,slug,'.$catepory->id,
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $catepory->update([
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
        return redirect()->route('cateporys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catepory  $catepory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catepory $catepory)
    {
        //
    }
}
