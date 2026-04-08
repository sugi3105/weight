<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\WeightTargetRequest;

class WeightTargetController extends Controller
{
    public function create()
    {
        return view('weight_target.create');
    }

    public function store(WeightTargetRequest $request)
    {
        $data =  session('register_data');

        if (!$data) {
        return redirect('/register/step1');
    }

        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
    ]);

    Auth::login($user);

    WeightTarget::create([
        'user_id' => $user->id,
        'target_weight' => $request->target_weight,
    ]);
    WeightLog::create([
        'user_id' => $user->id,
        'date' => now(),
        'weight' => $request->current_weight,
    ]);


    //WeightLog::create([
        //'user_id' => auth()->id,
       //'date' => now(),
        //'weight' => $request->current_weight,
   // ]);


        return redirect('/weight_logs');
    }

    public function edit()
    {
        $weightTarget = WeightTarget::where('user_id', auth()->id())->first();

        return view('weight_logs.goal_setting', compact('weightTarget'));
    }

    public function update(Request $request)
    {
        $request->validate([
        'target_weight' => ['required', 'numeric'],
    ]);

    $target = WeightTarget::where('user_id', auth()->id())->first();

    if ($target) {
        $target->update([
            'target_weight' => $request->target_weight,
        ]);
    } else {
        WeightTarget::create([
            'user_id' => auth()->id(),
            'target_weight' => $request->target_weight,
        ]);
    }
    
    return redirect('/weight_logs');
} }      