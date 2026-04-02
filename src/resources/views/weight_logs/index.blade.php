<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体重管理</title>

    <link rel="stylesheet" href="{{ asset('css/weight_log.css') }}">


</head>
<body>

<div class="container">

    <h1>PiGLy</h1>

    <div class="summary">
        <div class="summary-box">
            <p>目標体重</p>
            <p class="summary-value">{{ $currentWeight }}kg</p>
        </div>
        <div class="summary-box">
            <p>目標まで</p>
            <p class="summary-value">{{ $diff }}kg</p>
        </div>
        <div class="summary-box">
            <p>最新体重</p>
            <p class="summary-value">{{ $targetWeight }}kg</p>
        </div>
    </div>

    <div class="top-bar">

    <form action="/weight_logs" method="GET" class="search-form">
        <input type="date" name="start_date">
        <span>〜</span>
        <input type="date" name="end_date">
        <button type="submit" class="search-button">検索</button>
    </form>

    <a href="/weight_logs/create" class="button">データ追加</a>

    </div>


    <table>
        <thead>
            <tr>
                <th>日付</th>
                <th>体重</th>
                <th>摂取カロリー</th>
                <th>運動時間</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($weightLogs as $log)
                <tr>
                    <td>{{ $log->date }}</td>
                    <td>{{ $log->weight }}kg</td>
                    <td>{{ $log->calories }}kcal</td>
                    <td>{{ $log->exercise_time }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">データがありません</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>