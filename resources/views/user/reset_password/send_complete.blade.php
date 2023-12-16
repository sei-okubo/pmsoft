@extends('layout')

@section('title', 'パスワードリセットメール送信完了')

@section('content')
<main>
  <div class="container">
    <h2>パスワードリセットメールを送信しました。</h2>
    <div class="links">
      <div>
        <a href="{{ route('login') }}">ログイン画面へ</a>
      </div>
    </div>
  </div>
</main>
@endsection