<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumController extends Controller
{
    public function all()
    {
        $albums = Album::paginate('5');
        $title = 'Альбомы';
        return view(
            'album.all',
            compact('title', 'albums')
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
