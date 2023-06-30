<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $request->user();

        $comments = Comment::latest()->paginate(20);
        return view('manager.comments.index', compact('comments', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment, Request $request)
    {
        $users = $request->user();
        return view('manager.comments.show', compact('comment', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy(Comment $comment)
    {
        $comment->delete();

        alert()->success(' کامنت مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('comments.index');
    }


    function ChangeApprove(Comment $comment)
    {
        if ($comment->getRawOriginal('approved')) {
            $comment->update([
                'approved' => 0
            ]);
        } else {
            $comment->update([
                'approved' => 1
            ]);
        }

        alert()->success('وضعیت کامنت مورد نظر تغییر کرد', 'باتشکر');
        return redirect()->route('comments.index');
    }
}
