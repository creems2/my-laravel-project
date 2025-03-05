<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    // Метод для отображения формы
    public function index()
    {
        return view('form');
    }

    // Метод для обработки данных формы
    public function store(Request $request)
    {
        // Получаем данные из формы
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');

        // Возвращаем шаблон с приветствием и передаем данные
        return view('welcome', [
            'name' => $name,  // передаем имя в шаблон
            'surname' => $surname,  // передаем фамилию
            'email' => $email  // передаем email
        ]);
    }
}
