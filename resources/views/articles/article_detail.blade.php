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
    @auth
    <div class="links">
      <div>
        <a href="{{ route('home') }}">戻る</a>
      </div>
    </div>
    @endauth
    @guest
    <div class="links">
      <div>
        <a href="{{ route('top') }}">戻る</a>
      </div>
    </div>
    @endguest
  </div>
</main>
@endsection