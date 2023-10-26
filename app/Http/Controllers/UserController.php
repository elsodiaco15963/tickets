<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user',compact('users'));
    }

    public function create()
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'dni' => 'unique:users|sometimes|nullable|between:0,8',
        ],
        [
            'email.unique' => 'Correo en uso. Elige otro.',
            'dni.unique' => 'Dni en uso. Elige otro.',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dni' => $request->dni,
        ]);

        return redirect()->route('home')->with('success', 'Usuario creado exitosamente.');
    }


}
