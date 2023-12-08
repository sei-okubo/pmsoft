<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <a href="{{ route('showLogin') }}">ログイン</a>
  </header>
  <section>
    <h1>PM Soft</h1>
    <a href="{{ route('showSignup') }}">新規登録</a>
  </section>
  <main>
    <article>
      <h2>新着記事</h2>
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
        <a href="">記事一覧</a>
      </div>
    </article>
  </main>
  <footer>

  </footer>
</body>
</html>