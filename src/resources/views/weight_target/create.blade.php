<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>目標体重設定</title>
</head>
<body>

    <h1>目標体重設定</h1>

    <form action="{{ url('/register/step2') }}" method="POST">
        @csrf

        <div>
            <label for="target_weight">目標体重</label>
            <input 
                type="text" 
                name="target_weight" 
                id="target_weight"
                value="{{ old('target_weight') }}"
                placeholder="例：60.0"
            >
        </div>

    
        @error('target_weight')
            <div style="color:red;">
                {{ $message }}
            </div>
        @enderror

        <div style="margin-top: 20px;">
            <button type="submit">登録する</button>
        </div>
    </form>

</body>
</html>