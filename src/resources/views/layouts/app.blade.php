<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体重管理</title>
    <link rel="stylesheet" href="{{ asset('css/weight_log.css') }}">
</head>

<body>

<div class="header-menu">
    <a href="/weight_logs/goal_setting">目標体重設定</a>

    <form action="/logout" method="POST" style="display:inline;">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>