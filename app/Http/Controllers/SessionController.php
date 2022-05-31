<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
        // when login success
        session()->flash('success', 'Welcome back!');
        return redirect()->route('home');
        } else {
        // when login failed
        session()->flash('danger', 'ログイン失敗しました。');
        return redirect()->back()->withInput();
        }

        return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}