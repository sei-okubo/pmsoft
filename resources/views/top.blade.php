@extends('layout')

@section('title', 'トップページ')

@section('header')
@include('header')
@endsection

@section('content')
<section>
  @if (session('logout'))
    <script>
      $(function(){
        toastr.info('{{ session('logout') }}');
      });
    </script>
  @endif
  <h1>PM Soft</h1>
  <a href="{{ route('showSignup') }}">新規登録</a>
</section>
<main>
  <article>
    <h2>新着記事</h2>
    <div class="wrapper">
    @foreach ($articles as $article)
      <div class="article-wrapper">
        @if ($article->image !== null)
        <img src="{{ asset(Storage::url($article->image)) }}" alt="記事画像">
        @endif
        <a href="{{ route('showArticleDetail', $article->id) }}">
          <p>{{ $article->title }}</p>
        </a>
      </div>
    @endforeach
      <a href="">記事一覧</a>
    </div>
  </article>
</main>
@endsection