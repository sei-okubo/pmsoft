@extends('layout')

@section('title', 'パスワード再設定完了')

@section('content')
<main>
  <div class="container">
    <h2>パスワードリセットが完了しました</h2>
    <div class="links">
      <div>
        <a href="{{ route('login') }}">ログイン画面へ</a>
      </div>
    </div>
  </div>
</main>
@endsection