<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>初期体重登録</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div class="auth-container">

    <div class="card">

        <h1 class="logo">PiGLy</h1>

        <p class="subtitle">新規会員登録</p>
        <p class="step">STEP2 体重データの入力</p>


        <form action="/register/step2" method="POST">
            @csrf

            <div class="form-group">
                <label>現在の体重</label>
                <div class="input-unit">
                    <input type="text" name="current_weight" value="{{ old('current_weight') }}">
                    <span>kg</span>
                    @error('current_weight')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>目標の体重</label>
                <div class="input-unit">
                    <input type="text" name="target_weight" value="{{ old('target_weight') }}">
                    <span>kg</span>
                    @error('target_weight')
                      <p style="color:red;">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="submit-btn">アカウント作成</button>

        </form>

    </div>

</div>

</body>
</html>