<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            return response()->json([
                'message' => 'Пользователь не найден'
            ], 404);
        }
        if (!Hash::check($data['password'], $user->password)) {
            return response()->json([
                'message' => 'Пароль не правильный'
            ], 401);
        }
        return response()->json([
            'message' => 'Успешный вход',
            'user' => $user,
        ], 200);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|confirmed',
        ]);
        return $data;
    }
}
