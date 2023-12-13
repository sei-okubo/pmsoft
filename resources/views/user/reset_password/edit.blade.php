<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新パスワード入力フォーム</title>
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
    <div class="login-container">
      <h2>新しいパスワードを設定</h2>
      <form method="POST" action="{{ route('password_reset.update') }}">
        @csrf
        <input type="hidden" name="reset_token" value="{{ $userToken->token }}">
        <div class="input-group form-group">
          <label for="password" class="label">パスワード:</label>
          <input type="password" name="password" id="password" class="input {{ $errors->has('password') ? 'incorrect' : '' }}">
            <!-- @error('password')
              <div class="error">{{ $message }}</div>
            @enderror
            @error('token')
              <div class="error">{{ $message }}</div>
            @enderror -->
        </div>
        <div class="input-group form-group">
          <label for="password_confirmation" class="label">パスワード再入力:</label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="input {{ $errors->has('password_confirmation') ? 'incorrect' : '' }}">
        </div>
        <div class="form-group">
          <button type="submit" id="submit-btn">パスワードを再設定</button>
        </div>
      </form>
    </div>
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
