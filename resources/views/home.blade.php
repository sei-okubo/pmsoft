@extends('layout')

@section('title', 'マイページ')

@section('header')
@include('header.auth_header')
@endsection

@section('content')
<section>
  @if (session('login_success'))
    <script>
      $(function(){
        toastr.success('{{ session('login_success') }}');
      });
    </script>
  @endif
  <h2>{{ Auth::user()->name }}さんのマイページ</h2>
  <a href="{{ route('showPropertyForm') }}">物件登録</a>
</section>
<main class="home-contents">
  <section>
    <h2>物件一覧</h2>
    <div class="wrapper">
      <div>
        <a href="">
          <p>テスト物件1</p>
        </a>
      </div>
      <div>
        <a href="">
          <p>テスト物件2</p>
        </a>
      </div>
    </div>
  </section>
  <article>
    <h2>いいね記事一覧</h2>
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
</main>
@endsection