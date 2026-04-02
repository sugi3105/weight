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

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/weight_logs" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label>日付</label><br>
            <input type="date" name="date" value="{{ old('date') }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label>体重 (kg)</label><br>
            <input type="text" name="weight" value="{{ old('weight') }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label>摂取カロリー</label><br>
            <input type="text" name="calories" value="{{ old('calories') }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label>運動時間</label><br>
            <input type="text" name="exercise_time" value="{{ old('exercise_time') }}">
        </div>

        <div style="margin-bottom: 15px;">
            <label>メモ</label><br>
            <textarea name="memo">{{ old('memo') }}</textarea>
        </div>

        <button type="submit" class="button">登録</button>

    </form>

    <br>

    <a href="/weight_logs">← 戻る</a>

</div>

</body>
</html>