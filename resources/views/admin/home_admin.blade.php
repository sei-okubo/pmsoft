@extends('layout')

@section('title', '管理ページ')

@section('header')
@include('header.auth_header')
@endsection

@section('content')
<section>
  @if (session('success'))
    <script>
      $(function(){
        toastr.success('{{ session('success') }}');
      });
    </script>
  @endif
  @if (session('error'))
    <script>
      $(function(){
        toastr.error('{{ session('error') }}');
      });
    </script>
  @endif
  <h2>{{ Auth::user()->name }}さんの管理ページ</h2>
  <a href="{{ route('showPropertyForm') }}">記事登録</a>
</section>
<main class="home-contents">
  <article>
    <h2>作成記事一覧</h2>
    <div class="wrapper">
      <div>
        <a href="">
          <p>テスト記事1</p>
        </a>
      </div>
      <div>
        <a href="">
          <p>テスト記事2</p>
        </a>
      </div>
    </div>
  </article>
  <section>
    <h2>ユーザ一覧</h2>
    <div class="users-wrapper">
      @foreach ($users as $user)
      <div class="user-wrapper">
        <div>
          <p>{{ $user->name }}</p>
        </div>
        <div>
          <form method="post" action="{{ route('admin.deleteUser') }}">
            @method('PATCH')
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}">
            <input type="submit" class="delete_btn" value="削除">
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</main>
@endsection