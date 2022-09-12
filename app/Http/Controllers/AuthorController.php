<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;

class AuthorController extends Controller
{
    public function all()
    {
        $authors = Author::paginate('5');
        $title = 'Авторы';
        return view(
            'author.all',
            compact('title', 'authors')
        );

    }

    public function detail()
    {

    }

    public function edit()
    {

    }

    public function create()
    {

    }

    public function delete()
    {

    }
}
