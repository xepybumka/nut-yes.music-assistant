<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function all()
    {
        $authorModel = new Author();
        $autors = $authorModel->all();
        $title = 'Авторы';
        return view(
            'author.all',
            [
                'title' => $title,
                'authors' => $autors
            ]
        );
    }

    public function get()
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
