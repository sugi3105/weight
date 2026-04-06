@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="title">Weight Log</h1>

    <form action="/weight_logs/{{ $log->id }}/update" method="POST">
        @csrf

        <div class="form-group">
            <label>日付</label>
            <input type="date" name="date" value="{{ old('date', $log->date) }}">
        </div>

        <div class="form-group">
            <label>体重</label>
            <input type="text" name="weight" value="{{ old('weight', $log->weight) }}">
            <span>kg</span>
        </div>

        <div class="form-group">
            <label>摂取カロリー</label>
            <input type="text" name="calories" value="{{ old('calories', $log->calories) }}">
            <span>cal</span>
        </div>

        <div class="form-group">
            <label>運動時間</label>
            <input type="time" name="exercise_time" value="{{ old('exercise_time', $log->exercise_time) }}">
        </div>

        <div class="form-group">
            <label>運動内容</label>
            <textarea name="exercise_content">{{ old('exercise_content', $log->exercise_content) }}</textarea>
        </div>

        <div class="button-group">
            <a href="/weight_logs">戻る</a>
            <button type="submit">更新</button>
        </div>

    </form>

</div>

@endsection