@extends('layout')

@section('title', 'ログインページ')

@section('content')
<main>
  <div class="container">
    <h2>ログイン</h2>
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
    <form method="POST" action="{{ route('exeLogin') }}">
      @csrf
      <input type="hidden" name="del_flug" value="0">
      <div class="form-group">
        <label for="email">メールアドレス:</label>
        <input type="text" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="password">パスワード:</label>
        <input type="password" id="password" name="password">
      </div>
      <div class="form-group">
        <button type="submit" id="submit-btn">ログイン</button>
      </div>
    </form>
    <div class="links">
      <div>
        <a href="{{ route('password_reset.email.form') }}">パスワードを忘れた方はこちら</a>
      </div>
      <div>
        <a href="{{ route('showSignup') }}">新規登録はこちら</a>
      </div>
    </div>
  </div>
</main>
@endsection