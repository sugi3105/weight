<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightLogController extends Controller
{
    public function index()
    {
        $logs = WeightLog::where('user_id', auth()->id())
            ->orderBy('date', 'desc')
            ->get();

        return view('weight_logs.index', compact('logs'));
    }

    public function create()
    {
        return view('weight_logs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'weight' => 'required|numeric',
        ]);

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
        $query = WeightLog::where('user_id', auth()->id());

        if ($request->start_date) {
            $query->whereDate('date', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $query->whereDate('date', '<=', $request->end_date);
        }

        $logs = $query->orderBy('date', 'desc')->get();

        return view('weight_logs.index', compact('logs'));
    }
}

