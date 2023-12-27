@extends('layout')

@section('title', '新規登録ページ')

@section('content')
<main>
  <div class="container">
    <h2>新規登録</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif
    <form method="POST" action="{{ route('storeUser') }}">
      @csrf
      <div class="form-group">
        <label for="name">ユーザー名:</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">メールアドレス:</label>
        <input type="text" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
        <label for="password_confirmation">パスワード再入力:</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
      </div>
      <div class="form-group">
        <button type="submit" id="submit-btn">新規登録</button>
      </div>
    </form>
    <div class="links">
      <div>
        <a href="{{ route('login') }}">ログインはこちら</a>
      </div>
    </div>
  </div>
</main>
@endsection