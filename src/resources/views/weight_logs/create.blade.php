<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
  <div class="card">

    <h1>体重登録</h1>

    @foreach ($errors->all() as $error)
      <div style="color:red;">{{ $error }}</div>
    @endforeach

    <form method="POST" action="/weight_logs">
      @csrf

      <input type="date" name="date">
      <input type="text" name="weight" placeholder="体重">

      <input type="text" name="calories" placeholder="カロリー">
      <input type="time" name="exercise_time">
      <textarea name="exercise_content" placeholder="運動内容"></textarea>

      <button class="btn">登録</button>
    </form>

    <a href="/weight_logs">戻る</a>

  </div>
</div>