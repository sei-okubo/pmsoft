@extends('layout')

@section('title', '記事編集ページ')

@section('header')
@include('header')
@endsection

@section('content')
<main>
  @if (session('error'))
    <script>
      $(function(){
        toastr.error('{{ session('error') }}');
      });
    </script>
  @endif
  <div class="container">
    <h2>記事編集</h2>
    <p><span class="red">*</span>入力必須</p>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="POST" enctype='multipart/form-data' action="{{ route('admin.exeEditArticle') }}">
      @method('PATCH')
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <input type="hidden" name="article_id" value="{{ $article->id }}">
      <div class="form-group">
        <label for="title"><span>*</span>タイトル:</label>
        <input type="text" id="title" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="image">画像:</label>
        <input type="file" id="image" name="image" onchange="preview(this)">
        <div class="preview"></div>
      </div>
      @if ($article->image !== null)
      <div class="form-group">
        <label>変更前の画像:</label>
        <img src="{{ asset(Storage::url($article->image)) }}" alt="記事画像">
      </div>
      @endif
      <div class="form-group">
        <label for="text"><span>*</span>本文:</label>
        <textarea type="text" id="text" name="text">{{ $article->title }}</textarea>
      </div>
      <div class="form-group">
        <button type="submit" id="submit-btn">記事更新</button>
      </div>
    </form>
    <div class="links">
      <div>
        <a href="{{ route('admin.home') }}">戻る</a>
      </div>
    </div>
  </div>
</main>
@endsection