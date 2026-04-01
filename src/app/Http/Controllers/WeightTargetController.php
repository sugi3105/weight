<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightTarget;

class WeightTargetController extends Controller
{
    public function create()
    {
        return view('weight_target.create');
    }

    public function store(Request $request)
    {
        WeightTarget::create([
            'target_weight' => $request->target_weight,
            'user_id' => auth()->id(),
        ]);

        return redirect('/weight_logs');
    }

    public function edit()
    {
        $target = WeightTarget::where('user_id', auth()->id())->first();

        return view('weight_target.edit', compact('target'));
    }

    public function update(Request $request)
    {
        $target = WeightTarget::where('user_id', auth()->id())->first();

        $target->update([
            'target_weight' => $request->target_weight,
        ]);

        return redirect('/weight_logs');
    }
}