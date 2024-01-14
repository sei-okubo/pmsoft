@auth
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <button>ログアウト</button>
</form>
@endauth
@guest
<a href="{{ route('login') }}">ログイン</a>
@endguest