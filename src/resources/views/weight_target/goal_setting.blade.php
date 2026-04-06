@extends('layouts.app')

@section('content')

<div class="container">

    <h2>目標体重設定</h2>

    <form action="/weight_logs/goal_setting" method="POST">
        @csrf

        <input
            type="text"
            name="target_weight"
            value="{{ old('target_weight', $weightTarget->target_weight ?? '') }}"
        > kg

        @error('target_weight')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <br><br>

        <a href="/weight_logs">戻る</a>

        <button type="submit">更新</button>
    </form>

</div>

@endsection