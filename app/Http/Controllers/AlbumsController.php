<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumsController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')
//            ->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter');
        if (!empty($filter)) {
            $albums = Album::find(5)
                ->where('albums.name', 'like', '%'.$filter.'%')
                ->paginate(5);

        } else {
            $albums = Album::paginate(5);
        }
        $title = 'Альбомы';
        return view('album.index')
            ->with('title', $title)
            ->with('albums', $albums)
            ->with('filter', $filter);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = DB::table('authors')->get();
        $title = 'Добавление альбома';
        return view('album.create')
            ->with('title', $title)
            ->with('authors', $authors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;
        $album->author_id = $request->author_id;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $album->image = $path;
        }
        $album->save();
        return back()->withInput()->with('success', 'Запись успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $album = Album::find($id);
        $title = 'Детальная страница: '.$album->name;
        return view('album.show')
            ->with('title', $title)
            ->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
