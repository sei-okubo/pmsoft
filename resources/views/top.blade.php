@extends('layout')

@section('title', 'トップページ')

@section('header')
@include('header.guest_header')
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
      <a href="">記事一覧</a>
    </div>
  </article>
</main>
@endsection