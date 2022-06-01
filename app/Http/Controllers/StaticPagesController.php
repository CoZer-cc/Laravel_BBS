<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class StaticPagesController extends Controller
{
    public function home(User $user){
        // $comment = $user->comment()
        // ->orderBy('created_at', 'desc');
        $comment = Comment::with(['user'])->get();
        return view('static_pages/home', compact('comment'));
    }

    public function admin(){
        $comment = Comment::with(['user'])->get();
        return view('static_pages/admin', compact('comment'));
    }

    public function destory($id){
        //$comment = Comment::with(['user'])->get();
        //dd($comment);
        $comment_dele = Comment::find($id);
        dd($comment_dele);
        //$comment->content->destory();
        session()->flash('success', '微博已被成功删除！');
        return redirect()->back();
    }
}
