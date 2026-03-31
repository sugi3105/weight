<h1>体重一覧</h1>

<a href="/weight_logs/create">体重を記録する</a>

<form method="GET" action="/weight_logs/search">
  <input type="date" name="start_date">
  <input type="date" name="end_date">
  <button type="submit">検索</button>
</form>

<hr>

@foreach($logs as $log)
  <div>
    {{ $log->date }} / {{ $log->weight }}kg
  </div>
@endforeach