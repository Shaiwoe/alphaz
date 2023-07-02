<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catevory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CatevoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        $catevorys = Catevory::latest()->paginate(100);
        return view('manager.catevorys.index', compact('catevorys','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        $catevorys = Catevory::all();
        return view('manager.catevorys.create', compact('catevorys', 'users'));
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
            'slug' => 'required|unique:catevorys,slug',
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        Catevory::create([
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
        return redirect()->route('catevorys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catevory  $catevory
     * @return \Illuminate\Http\Response
     */
    public function show(Catevory $catevory , Request $request)
    {
        $users = $request->user();
        return view('manager.catevorys.show', compact('catevory','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catevory  $catevory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catevory $catevory , Request $request)
    {
        $users = $request->user();
        $catevorys = Catevory::where('parent_id', 0)->get();
        return view('manager.catevorys.edit', compact('catevory', 'catevorys', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catevory  $catevory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catevory $catevory)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:catevorys,slug,'.$catevory->id,
            'parent_id' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $catevory->update([
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
        return redirect()->route('catevorys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catevory  $catevory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catevory $catevory)
    {
        //
    }
}
