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
        return view('static_pages/admin');
    }
}
