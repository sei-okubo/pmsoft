<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マイページ</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
  <header>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button>ログアウト</button>
    </form>
  </header>
  <section>
    @if (session('login_success'))
      <script>
        $(function(){
          toastr.success('{{ session('login_success') }}');
        });
      </script>
    @endif
    <h2>{{ Auth::user()->name }}さんのマイページ</h2>
    <a href="">物件登録</a>
  </section>
  <main class="home-contents">
    <section>
      <h2>物件一覧</h2>
      <div class="wrapper">
        <div>
          <a href="">
            <p>テスト物件1</p>
          </a>
        </div>
        <div>
          <a href="">
            <p>テスト物件2</p>
          </a>
        </div>
      </div>
    </section>
    <article>
      <h2>いいね記事一覧</h2>
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
  </main>
  <footer>

  </footer>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>