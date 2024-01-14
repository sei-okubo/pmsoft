<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->article = new Article();
    }

    /**
     * 記事登録画面表示
     * @return view
     */
    public function showArticleForm()
    {
        return view('articles.article_form');
    }

    /**
     * 記事登録
     * @param ArticleRequest $request
     */
    public function storeArticle(ArticleRequest $request)
    {
        try {
            $title = $request->title;
            $text = $request->text;
            $img = $request->file('image');
            if (isset($img)) {
                $path = $img->store('img','public');
            } else {
                $path = null;
            }
            $articleData = array(
                'title' => $title,
                'image' => $path,
                'text' => $text,
            );
            $article = $this->article->store($articleData);
            $request->session()->regenerate();
            return redirect()->route('admin.home')->with('success', '記事登録が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '記事登録に失敗しました',
            ]);
        }
    }

    /**
     * 記事詳細
     * @param int $id
     * @return View
     */
    public function showArticleDetail($id)
    {
        $article = $this->article->find($id);
        if (is_null($article)) {
            return redirect()->route('top')->with('error', '記事情報が取得できませんでした');
        }
        return view('articles.article_detail', [
            'article' => $article,
        ]);
    }

    /**
     * 管理者記事詳細
     * @param int $id
     * @return View
     */
    public function showArticleDetailAdmin($id)
    {
        $article = $this->article->find($id);
        if (is_null($article)) {
            return redirect()->route('admin.home')->with('error', '記事情報が取得できませんでした');
        }
        return view('articles.article_detail_admin', [
            'article' => $article,
        ]);
    }

    /**
     * 記事編集画面表示
     * @param int $id
     * @return View
     */
    public function showEditArticle($id)
    {
        $article = $this->article->find($id);
        if (is_null($article)) {
            return redirect()->route('admin.home')->with('error', '記事情報が取得できませんでした');
        }
        return view('articles.article_edit', [
            'article' => $article,
        ]);
    }

    /**
     * 記事更新
     * @param ArticleRequest $request
     */
    public function exeEditArticle(ArticleRequest $request)
    {
        try {
            $id = $request->article_id;
            $article = Article::find($id);
            $title = $request->title;
            $text = $request->text;
            $img = $request->file('image');
            if (isset($img)) {
                $path = $img->store('img','public');
            } else {
                $path = null;
            }            
            $article->fill([
                'title' => $title,
                'image' => $path,
                'text' => $text,
            ]);
            $article->save();
            
            $request->session()->regenerate();
            return redirect()->route('admin.home')->with('success', '記事更新が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '物件更新に失敗しました',
            ]);
        }
    }

    /**
     * 記事削除
     * @param Request $request
     */
    public function exeDeleteArticle(Request $request)
    {
        try {
            $id = $request->articleId;
            Article::destroy($id);
            
            $request->session()->regenerate();
            return redirect()->route('admin.home')->with('success', '記事削除が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '記事削除に失敗しました',
            ]);
        }

    }
}
