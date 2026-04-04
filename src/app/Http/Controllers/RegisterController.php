<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->validated();

        session([
            'register_data' => [
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => $data['password'],
            ]
        ]);

        return redirect('/register/step2');
        dd(session()->all());
    }
}