<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tab;
use App\Models\TagBook;
use App\Models\TagPadcasts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        $tabs = Tab::latest()->paginate(50);
        return view('admin.tabs.index', compact('tabs','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        return view('admin.tabs.create' , compact('users'));
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
            'title' => 'required|unique:tabs,title',
            'slug' => 'required|unique:tabs,slug',
        ]);

        try {
            DB::beginTransaction();

        Tab::create([
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
        return redirect()->route('tabs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tab $tab, Request $request)
    {
        $users = $request->user();
        return view('admin.tabs.edit' , compact('tab','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tab $tab)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $tab->update([
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
        return redirect()->route('tabs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
