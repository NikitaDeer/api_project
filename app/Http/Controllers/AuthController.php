<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'email' => 'required|string|email|max:80|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Сделать
        // Узнать как правильно все сделать
        // Валидация при регистрации, кажется, нужно указать все поля, которые есть в таблице
        // Обязательными сделать те поля, которые пользователь будет юзать при регистрации
        // Остальным просто прописать валидацию

    }
}
