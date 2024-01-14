<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Property;
use App\Models\Income;
use App\Models\Expenditure;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function top()
    {
        $articles = Article::orderBy('id', 'desc')->take(3)->get();
        return view('top', [
            'articles' => $articles,
        ]);
    }

    /**
     * @return View
     */
    public function showLogin()
    {
        return view('login.login');
    }

    /**
     * @return View
     */
    public function showLoginAdmin()
    {
        return view('login.login_admin');
    }

    /**
     * @param UserRequest $request
     */
    public function exeLogin(UserRequest $request)
    {
        $credentials = $request->only('email', 'password', 'del_flug');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('home')->with('success', 'ログインに成功しました');
        }
        return back()->withErrors([
            'error' => 'メールアドレスかパスワードが間違っています',
        ]);
    }

    /**
     * @param UserRequest $request
     */
    public function exeLoginAdmin(UserRequest $request)
    {
        $credentials = $request->only('email', 'password', 'del_flug', 'role');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home')->with('success', 'ログインに成功しました');
        }
        return back()->withErrors([
            'error' => 'メールアドレスかパスワードが間違っています',
        ]);
    }

    /**
     * 
     */
    public function showHome()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        $articles = Article::orderBy('id', 'desc')->get();
        return view('home', [
            'properties' => $properties,
            'articles' => $articles,
        ]);
    }

    /**
     * @return View
     */
    public function showHomeAdmin()
    {
        $users = User::where('del_flug', '=', '0')->get();
        $articles = Article::orderBy('id', 'desc')->get();
        // $users = User::all();
        return view('admin.home_admin', [
            'users' => $users,
            'articles' => $articles,
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
     */
    public function storeUser(UserRequest $request)
    {
        if ($request->input('password') === $request->input('password_confirmation')) {
            try {
                // $userインスタンスを作成する
                $user = new User();
    
                // 投稿フォームから送信されたデータを取得し、インスタンスの属性に代入する
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = $request->input('password');
    
                // データベースに保存
                $user->save();

                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect('home')->with('success', '登録が完了しました！');
                }
            } catch (\Exception $e) {
                return back()->withErrors([
                    'error' => '登録に失敗しました',
                ]);
            }
        } else {
            return back()->withErrors([
                'error' => 'パスワード再入力と一致しません',
            ]);
        }
    }

    /**
     * @param Request $request
     * @return View
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout', 'ログアウトしました');
    }

    /**
     * @param Request $request
     */
    public function deleteUser(Request $request)
    {
        try {
            $id = $request->input('userId');
            $user = User::find($id);
            $user->del_flug = 1;
            $user->save();
            return redirect()->route('admin.home')->with('success', '削除が完了しました');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '削除に失敗しました',
            ]);
        }
       
    }
}
