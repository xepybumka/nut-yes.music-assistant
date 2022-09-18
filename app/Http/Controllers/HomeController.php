<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $title = "Главная страница";
        return view('home')
            ->with('title', $title)
            ->with('user', $user);
    }
}
