<form method="POST" action="{{ route('logout') }}">
  @csrf
  <button>ログアウト</button>
</form>