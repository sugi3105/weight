<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightLogRequest;


class WeightLogController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();

    $query = WeightLog::where('user_id', $userId);

    if ($request->start_date) {
        $query->where('date', '>=', $request->start_date);
    }

    if ($request->end_date) {
        $query->where('date', '<=', $request->end_date);
    }

    $weightLogs = $query->orderBy('date', 'desc')->paginate(8);

    $currentWeight = $weightLogs->first()->weight ?? 0;

    $target = WeightTarget::where('user_id', $userId)->first();
    $targetWeight = $target->target_weight ?? 0;

    $diff = $currentWeight - $targetWeight;

    return view('weight_logs.index', compact(
        'weightLogs',
        'currentWeight',
        'targetWeight',
        'diff'
    ));
    }

    public function create()
    {
        return view('weight_logs.create');
    }

    public function store(WeightLogRequest $request)
    {
        WeightLog::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content,
        ]);
    
        return redirect('/weight_logs');
    }

    public function search(Request $request)
    {
        $logs = WeightLog::where('weight', $request->weight)->get();
        return view('weight_logs.index', compact('logs'));
    }

    public function show($weightLogId)
    {
        $log = WeightLog::find($weightLogId);
        return view('weight_logs.show', compact('log'));
    }

    public function edit($id)
    {
       $log = WeightLog::findOrFail($id);
       return view('weight_logs.edit', compact('log'));
    }

    public function update(Request $request, $weightLogId)
    {
       $log = WeightLog::findOrFail($weightLogId);

       $log->update([
        'date' => $request->date,
        'weight' => $request->weight,
        'calories' => $request->calories,
        'exercise_time' => $request->exercise_time,
        'exercise_content' => $request->exercise_content,
    ]);
    return redirect('/weight_logs');
    }
}