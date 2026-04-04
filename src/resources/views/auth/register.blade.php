<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<div class="auth-container">
  <div class="auth-card">

  
    <div class="logo">PiGLy</div>

    
    <div class="title">新規会員登録</div>

    
    <div class="step">STEP1 アカウント情報の登録</div>

  
    <form action="/register/step1" method="POST">
      @csrf

      <div class="form-group">
        <input type="text" name="name" placeholder="名前">
        @error('name')
          <p style="color:red;">{{ $message }}</p>
        @enderror
      </div>

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

      
      <button class="btn">次に進む</button>
    </form>

  
    <div class="auth-link">
      <a href="/login">ログインはこちら</a>
    </div>

  </div>
</div>