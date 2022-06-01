<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function create(){
        return view('static_pages._comment_form');
    }

    public function store(Request $request){
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);
        
        Auth::user()->comment()->create([
            'content' => $request['content']
        ]);

        session()->flash('success', '成功しました！');
        return redirect()->route('home');
    }

}
