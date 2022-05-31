<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(){
        return view('users/create');
    }

    public function login(){
        return view('static_pages/login');
    }

    public function show(User $user){
        $comment = $user->comment()
                            ->orderBy('created_at', 'desc');
        return view('users.show', compact('user', 'comment'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '登録成功しました、ようこそ！');
        return redirect()->route('home');
    }

    

}
