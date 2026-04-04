<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体重登録</title>

  
    <link rel="stylesheet" href="{{ asset('css/weight_log.css') }}">
  
</head>
<body>

<div class="container">

    <h1>体重登録</h1>


    <form action="/weight_logs" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label>日付
                <span class="form__label--required">必須</span>
            </label><br>
            <input type="date" name="date" value="{{ old('date') }}">
            @error('date')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>体重 (kg)
                <span class="form__label--required">必須</span>
            </label><br>
            <input type="text" name="weight" value="{{ old('weight') }}">
            @error('weight')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>摂取カロリー
                <span class="form__label--required">必須</span>
            </label><br>
            <input type="text" name="calories" value="{{ old('calories') }}">
            @error('calories')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>運動時間
                <span class="form__label--required">必須</span>
            </label><br>
            <input type="text" name="exercise_time" value="{{ old('exercise_time') }}">
            @error('exercise_time')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>運動内容</label><br>
            <textarea name="exercise_content">{{ old('exercise_content') }}</textarea>
            @error('exercise_content')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="button">登録</button>

    </form>

    <br>

    <a href="/weight_logs">← 戻る</a>

</div>

</body>
</html>