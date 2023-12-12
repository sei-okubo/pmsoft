<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
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

      @if (session('login_error'))
      <div class="alert alert-danger">
        {{ session('login_error') }}
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
          <button type="submit" id="submit-btn">ログイン</button>
        </div>
      </form>
      <div class="links">
        <div>
          <a href="">パスワードを忘れた方はこちら</a>
        </div>
        <div>
          <a href="{{ route('showSignup') }}">新規登録はこちら</a>
        </div>
      </div>
    </div>
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
