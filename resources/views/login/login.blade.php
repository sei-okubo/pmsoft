<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <!-- <a href="">ログイン</a> -->
  </header>
  <main>
    <div class="login-container">
      <h2>ログイン</h2>
      @if ($errors->any())
      <div class="alert danger-alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form method="POST" action="{{ route('exeLogin') }}">
        @csrf
        <div class="form-group">
          <label for="email">メールアドレス:</label>
          <input type="text" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="password">パスワード:</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
          <button type="submit">ログイン</button>
        </div>
      </form>
      <div class="signup-link">
        <a href="{{ route('showSignup') }}">新規登録はこちら</a>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
