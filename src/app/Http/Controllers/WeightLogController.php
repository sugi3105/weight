<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightLogController extends Controller
{
    public function index()
    {
        $logs = WeightLog::all();
        return view('weight_logs.index', compact('logs'));
    }

    public function create()
    {
        return view('weight_logs.create');
    }

    public function store(Request $request)
    {
        WeightLog::create($request->all());
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

    public function update(Request $request, $weightLogId)
    {
        $log = WeightLog::find($weightLogId);
        $log->update($request->all());

        return redirect('/weight_logs');
    }

    public function destroy($weightLogId)
    {
        WeightLog::find($weightLogId)->delete();
        return redirect('/weight_logs');
    }
}