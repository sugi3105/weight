<div class="container">

    <h1 class="title">Weight Log</h1>

    <form action="/weight_logs/update" method="POST">
        @csrf

        <div class="form-group">
            <label>日付</label>
            <input type="date" name="date">
        </div>

        <div class="form-group">
            <label>体重</label>
            <input type="text" name="weight">
            <span>kg</span>
        </div>

        <div class="form-group">
            <label>摂取カロリー</label>
            <input type="text" name="calories">
            <span>cal</span>
        </div>

        <div class="form-group">
            <label>運動時間</label>
            <input type="time" name="exercise_time">
        </div>

        <div class="form-group">
            <label>運動内容</label>
            <textarea name="exercise_content"></textarea>
        </div>

        <div class="button-group">
            <button type="button">戻る</button>
            <button type="submit">更新</button>
            <button type="button" class="delete">削除</button>
        </div>

    </form>
</div>