@extends('layout')

@section('title', '記事詳細ページ')

@section('header')
@include('header')
@endsection

@section('content')
<main>
  <div class="container article">
    <h2>{{ $article->title }}</h2>
    <div>
      <div class="form-group">
        @if ($article->image !== null)
        <img src="{{ asset(Storage::url($article->image)) }}" alt="記事画像">
        @endif
      </div>
      <div class="form-group">
        <p>{!! nl2br(e($article->text)) !!}</p>
      </div>
    </div>
    <div class="links">
      <div class="flex">
        <div class="left">
          <div class="form-group">
            <form method="get" action="{{ route('admin.showEditArticle', $article->id) }}">
              <button type="submit" class="edit-btn">記事編集</button>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <form method="post" action="{{ route('admin.exeDeleteArticle') }}">
              @method('DELETE')
              @csrf
              <input type="hidden" name="articleId" value="{{ $article->id }}">
              <button type="submit" class="delete_btn">記事削除</button>
            </form>
          </div>
        </div>
      </div>
      <div>
        <a href="{{ route('admin.home') }}">戻る</a>
      </div>
    </div>
  </div>
</main>
@endsection