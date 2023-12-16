@extends('layout')

@section('title', '新パスワード入力フォーム')

@section('content')
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
  <div class="container">
    <h2>新しいパスワードを設定</h2>
    <form method="POST" action="{{ route('password_reset.update') }}">
      @csrf
      <input type="hidden" name="reset_token" value="{{ $userToken->token }}">
      <div class="input-group form-group">
        <label for="password" class="label">パスワード:</label>
        <input type="password" name="password" id="password" class="input {{ $errors->has('password') ? 'incorrect' : '' }}">
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
@endsection