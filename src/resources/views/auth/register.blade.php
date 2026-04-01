<link rel="stylesheet" href="{{ asset('css/auth.css') }}">

<div class="auth-container">
  <div class="auth-card">

  
    <div class="logo">PiGLy</div>

    
    <div class="title">新規会員登録</div>

    
    <div class="step">STEP1 アカウント情報の登録</div>

  
    @foreach ($errors->all() as $error)
      <div style="color:red;">{{ $error }}</div>
    @endforeach

  
    <form action="/register/step1" method="POST">
      @csrf

      <div class="form-group">
        <input type="text" name="name" placeholder="名前">
      </div>

      <div class="form-group">
        <input type="email" name="email" placeholder="メールアドレス">
      </div>

      <div class="form-group">
        <input type="password" name="password" placeholder="パスワード">
      </div>

      
      <button class="btn">次に進む</button>
    </form>

  
    <div class="auth-link">
      <a href="/login">ログインはこちら</a>
    </div>

  </div>
</div>