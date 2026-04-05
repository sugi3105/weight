<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<div class="auth-container">
  <div class="auth-card">

  
    <div class="logo">PiGLy</div>

  
    <div class="title">ログイン</div>

    <form method="POST" action="/login">
      @csrf

      <div class="form-group">
        <input type="email" name="email" placeholder="メールアドレス">
        @error('email')
          <p style="color:red;">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <input type="password" name="password" placeholder="パスワード">
        @error('password')
          <p style="color:red;">{{ $message }}</p>
        @enderror
      </div>

      <button class="btn">ログイン</button>
    </form>

    <div class="auth-link">
      <a href="/register/step1">アカウント作成はこちら</a>
    </div>

  </div>
</div>