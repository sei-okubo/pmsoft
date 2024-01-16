@extends('layout')

@section('title', 'マイページ')

@section('header')
@include('header')
@endsection

@section('content')
<section>
  @if (session('success'))
    <script>
      $(function(){
        toastr.success('{{ session('success') }}');
      });
    </script>
  @endif
  <h2>{{ Auth::user()->name }}さんのマイページ</h2>
  <a href="{{ route('showPropertyForm') }}">物件登録</a>
</section>
<main class="home-contents">
  <section>
    <h2>物件一覧</h2>
    <div class="wrapper properties-wrapper">
      @foreach ($properties as $property)
        @if ($property->user_id === Auth::user()->id)
        <div>
          <a href="{{ route('showPropertyDetail', $property->id) }}">
            <p>{{ $property->property_name }}</p>
          </a>
        </div>
        @endif
      @endforeach
    </div>
  </section>
  <article>
    <h2>記事一覧</h2>
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
    </div>
  </article>
</main>
@endsection