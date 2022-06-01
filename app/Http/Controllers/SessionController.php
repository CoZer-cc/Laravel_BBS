<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\Auth;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
    
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
        $fallback = route('users.edit', Auth::user());
        return redirect()->intended($fallback);
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
        session()->flash('success', 'ログアウトしました！');
        return redirect('login');
    }

    
}