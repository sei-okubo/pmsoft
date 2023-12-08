<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <!-- <a href="">ログイン</a> -->
  </header>
  <main>
    <div class="login-container">
      <h2>新規登録</h2>
      <form method="POST" action="">
        @csrf
        <div class="form-group">
          <label for="username">ユーザーネーム:</label>
          <input type="text" id="username" name="username">
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
          <label for="password-conf">パスワード再入力:</label>
          <input type="text" id="password-conf" name="password-conf">
        </div>
        <div class="form-group">
          <button type="submit">新規登録</button>
        </div>
      </form>
      <div class="signup-link">
        <a href="{{ route('showLogin') }}">ログインはこちら</a>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>
</html>
