<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録ページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
  <header>
    <!-- <a href="">ログイン</a> -->
  </header>
  <main>
    <div class="login-container">
      <h2>新規登録</h2>
      <form method="POST" action="{{ route('store') }}">
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
          <label for="password-conf">パスワード再入力:</label>
          <input type="password" id="password-conf" name="password-conf">
        </div>
        <div class="form-group">
          <button type="submit" id="submit-btn">新規登録</button>
        </div>
      </form>
      <div class="signup-link">
        <a href="{{ route('login') }}">ログインはこちら</a>
      </div>
    </div>
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
