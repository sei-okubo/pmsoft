@extends('layout')

@section('title', 'パスワード再設定メール送信フォーム')

@section('content')
<main>
  <div class="container">
    <h2>パスワード再設定メール送信フォーム</h2>
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
@endsection