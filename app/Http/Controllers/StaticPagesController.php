<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class StaticPagesController extends Controller
{

    public function home(User $user){
/*          $comment = $user->comment()
         ->orderBy('created_at', 'desc'); */
        $comment = Comment::with(['user'])->orderBy('created_at', 'desc')->get();
        //$comment = Comment::with('user')->find(1);
        //dd($comment);
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
        //dd($comment_dele);
        $comment_dele->delete();
        session()->flash('success', '削除しました！');
        return redirect()->back();
    }
}
