<?php

namespace App\Http\Controllers;

use App\Models\Album;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')
            ->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $albums = Album::paginate('5');
        $title = 'Альбомы';
        return view(
            'album.index',
            compact('title', 'albums')
        );
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
