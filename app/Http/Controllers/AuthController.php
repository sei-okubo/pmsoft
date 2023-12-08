<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function showLogin()
    {
        return view('login.login');
    }

    /**
     * @param UserRequest $request
     */
    public function exeLogin(UserRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('home')->with('success', 'ログインに成功しました');
        }
        return back()->withErrors([
            'error' => 'ログインに失敗しました',
        ]);
    }

    /**
     * @return View
     */
    public function showSignup()
    {
        return view('signup.signup');
    }

    /**
     * @param UserRequest $request
     * @return View
     */
    public function logout(UserRequest $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
