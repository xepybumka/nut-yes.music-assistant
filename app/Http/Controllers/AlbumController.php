<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumController extends Controller
{
    public function all()
    {
        $albumModel = new Album();
        $albums = $albumModel->all();
        $title = 'Альбомы';
        return view(
            'albums.all',
            [
                'title' => $title,
                'albums' => $albums
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
