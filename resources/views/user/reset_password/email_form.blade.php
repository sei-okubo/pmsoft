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
      <form method="POST" action="{{ route('password_reset.email.send') }}">
            @csrf
            <div>
                <label for="email">メールアドレス</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button>再設定用メールを送信</button>
        </form>

        <a href="{{ route('login') }}">戻る</a>
    </div>
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
