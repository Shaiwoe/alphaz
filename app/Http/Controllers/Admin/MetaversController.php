<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Metavers;

class MetaversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = $request->user();

        $metavers = Metavers::query()
        ->orderBy('created_at', 'ASC')
        ->where('is_active', 1)
        ->paginate(9);
        return view('admin.metavers.index', compact('metavers','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        return view('admin.metavers.create', compact('users'));
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
            'icon' => 'required|mimes:jpg,jpeg,png,svg',
            'name' => 'required|string',
            'slug' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->icon->getClientOriginalName());
        $request->icon->move(public_path(env('METAVERS_IMAGES_UPLOAD_PATH')), $fileNameImage);

        Metavers::create([
            'icon' => $fileNameImage,
            'name' => $request->name,
            'slug' => $request->slug,
            'symbol' => $request->symbol,
            'price_usdt' => $request->price_usdt,
            'price_rial' => $request->price_rial,
            'cap' => $request->cap,
            'chart' => $request->chart,
            'change' => $request->change,
            'body' => $request->body,
            'site' => $request->site,

            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد متاورس', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success(' متاورس مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('metavers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $users = $request->user();
        return view('admin.metavers.create', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Metavers $metavers,Request $request)
    {
        $users = $request->user();

        return view('admin.metavers.edit' , compact('metavers','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metavers $metavers)
    {
        $request->validate([
            'icon' => 'required|mimes:jpg,jpeg,png,svg',
            'name' => 'required|string',
            'slug' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->icon->getClientOriginalName());
        $request->icon->move(public_path(env('METAVERS_IMAGES_UPLOAD_PATH')), $fileNameImage);

        $metavers->update([
            'icon' => $fileNameImage,
            'name' => $request->name,
            'slug' => $request->slug,
            'symbol' => $request->symbol,
            'price_usdt' => $request->price_usdt,
            'price_rial' => $request->price_rial,
            'cap' => $request->cap,
            'chart' => $request->chart,
            'change' => $request->change,
            'body' => $request->body,
            'site' => $request->site,

            'is_active' => $request->is_active,
        ]);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد متاورس', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success(' متاورس مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('metavers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metavers $metavers)
    {
        $metavers->delete();

        alert()->success('متاورس مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('metavers.index');
    }


    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
