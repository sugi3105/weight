<h1>体重登録</h1>


@foreach ($errors->all() as $error)
  <div style="color:red;">{{ $error }}</div>
@endforeach

<form method="POST" action="/weight_logs">
  @csrf

  <div>
    <label>日付</label>
    <input type="date" name="date">
  </div>

  <div>
    <label>体重</label>
    <input type="text" name="weight">
  </div>

  <div>
    <label>カロリー</label>
    <input type="text" name="calories">
  </div>

  <div>
    <label>運動時間</label>
    <input type="time" name="exercise_time">
  </div>

  <div>
    <label>運動内容</label>
    <textarea name="exercise_content"></textarea>
  </div>

  <button type="submit">登録</button>
</form>

<a href="/weight_logs">戻る</a>