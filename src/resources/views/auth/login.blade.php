<form method="POST" action="/login">
  @csrf
  <input type="email" name="email" placeholder="メール">
  <input type="password" name="password" placeholder="パスワード">
  <button type="submit">ログイン</button>
  @foreach ($errors->all() as $error)
  <div>{{ $error }}</div>
@endforeach
</form>