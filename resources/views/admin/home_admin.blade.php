@extends('layout')

@section('title', '管理ページ')

@section('header')
@include('header.auth_header')
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
  <h2>{{ Auth::user()->name }}さんの管理ページ</h2>
  <a href="{{ route('showPropertyForm') }}">記事登録</a>
</section>
<main class="home-contents">
  <article>
    <h2>作成記事一覧</h2>
    <div class="wrapper">
      <div>
        <a href="">
          <p>テスト記事1</p>
        </a>
      </div>
      <div>
        <a href="">
          <p>テスト記事2</p>
        </a>
      </div>
    </div>
  </article>
  <section>
    <h2>ユーザ一覧</h2>
    <div class="wrapper users-wrapper">
      @foreach ($users as $user)
        <div>
          <a href="">
            <p>{{ $user->name }}</p>
          </a>
        </div>
      @endforeach
    </div>
  </section>
</main>
@endsection