<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワード再設定メール送信フォーム</title>
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
      <h2>パスワード再設定メール送信フォーム</h2>
      <!-- @if (session('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
      @endif -->
      @if (session('flash_message'))
        <script type="text/javascript">
          $(function () {
            toastr.error('{{ session('flash_message') }}', 'エラー')
          });
        </script>
      @endif
      @foreach ($errors->all() as $error)
        <script type="text/javascript">
          $(function () {
            toastr.error('{{ $error }}', 'エラー')
          });
        </script>
      @endforeach
      <form method="POST" action="{{ route('password_reset.email.send') }}">
        @csrf
        <div class="form-group">
          <label for="email">メールアドレス:</label>
          <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <button type="submit" id="submit-btn">再設定用メールを送信</button>
        </div>
      </form>
      <div class="links">
        <div>
          <a href="{{ route('login') }}">戻る</a>
        </div>
      </div>
    </div>
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
