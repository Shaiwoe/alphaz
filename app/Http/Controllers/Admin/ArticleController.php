<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();
        


        $Articles = Article::query()
            ->orderBy('updated_at', 'desc')
            ->where('is_active', 1)
            ->search()
            ->paginate(15);


        return view('admin.articles.index', compact('Articles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = $request->user();
        $tags = Tag::all();
        $Categorys = Category::where('parent_id', '!=' , 0)->get();
        return view('admin.articles.create' , compact('tags' , 'Categorys','users'));
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
            'tag_id' => 'required',
            'is_active' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'body' => 'required',
            'primary_image' => 'required|mimes:jpg,jpeg,png,svg',

        ]);

        try {
            DB::beginTransaction();

        $fileNameImage = generateFileName($request->primary_image->getClientOriginalName());
        $request->primary_image->move(public_path(env('ARTICLES_IMAGES_UPLOAD_PATH')), $fileNameImage);

        $article = Article::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'body' => $request->body,
            'primary_image' => $fileNameImage,
            'is_active' => $request->is_active,
        ]);



        $article->tags()->attach($request->tag_ids);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد مقاله', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('مقاله مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article , Request $request)
    {
        $users = $request->user();
        $images = $article->images;
        return view('admin.articles.show', compact('article', 'images', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article , Request $request)
    {
        $users = $request->user();
        $tags = Tag::all();
        $Categorys = Category::where('parent_id', '!=' , 0)->get();
        return view('admin.articles.edit' , compact('article' , 'tags' , 'Categorys', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'primary_image' => 'nullable|mimes:jpg,jpeg,png,svg',
            'title' => 'required',
            'tag_id' => 'required',
            'tag_id.*' => 'exists:tags,id',
            'is_active' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'body' => 'required',

        ]);

        try {
            DB::beginTransaction();

            if ($request->has('primary_image')){
                $fileNameImage = generateFileName($request->primary_image->getClientOriginalName());
                $request->primary_image->move(public_path(env('ARTICLES_IMAGES_UPLOAD_PATH')), $fileNameImage);
            }

        $article->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'body' => $request->body,
            'is_active' => $request->is_active,
            'primary_image' => $request->has('primary_image') ? $fileNameImage : $article->primary_image,
        ]);


        $article->tags()->sync($request->tag_ids);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش مقاله', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('مقاله مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        alert()->success('مقاله مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('articles.index');
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
