<?php

namespace App\Http\Controllers\Home;

use App\Models\Php;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PhpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phps = Php::query()
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('home.php.index', compact('phps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.php.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Php $php)
    {
        $request->validate([
            'video' => 'nullable',
        ]);

        try {
            DB::beginTransaction();


            if ($request->has('video') && $request->video !== null) {
                $fileNameVideo = generateFileName($request->video->getClientOriginalName());
                $request->video->move(public_path(env('VIDEO_VIDEO_UPLOAD_PATH')), $fileNameVideo);
            }


            Php::create([
                'video' => $request->video !== null ? $fileNameVideo : $php->video,
            ]);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد ویدیو', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('ویدیو مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('php.create');
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
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
