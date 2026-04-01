<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
  <div class="card">

  
    <div class="header">
      <h1>体重管理</h1>
      <a href="/weight_logs/create" class="btn">体重を記録する</a>
    </div>

    
    <form method="GET" action="/weight_logs/search" class="search">
      <input type="date" name="start_date">
      <input type="date" name="end_date">
      <button class="btn">検索</button>
    </form>

    
    @foreach($logs as $log)
      <div class="log">
        <div>
          {{ $log->date }}
        </div>
        <div class="weight">
          {{ $log->weight }}kg
        </div>
      </div>
    @endforeach

  </div>
</div>