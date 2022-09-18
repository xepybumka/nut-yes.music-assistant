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
        $this->middleware('auth')
            ->only(['create', 'store', 'edit', 'update', 'destroy']);
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
     */
    public function edit($id)
    {
        $album = Album::find($id);
        $title = 'Обновление записи альбома: '.$album->name;
        $authors = DB::table('authors')->get();
        return view('album.edit')
            ->with('title', $title)
            ->with('authors', $authors)
            ->with('album', $album);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $hasNewField = false;
        $album = Album::find($id);
        if ($album->name !== $request->name) {
            $album->name = $request->name;
            $hasNewField = true;
        }

        if ($album->description !== $request->description) {
            $album->description = $request->description;
            $hasNewField = true;
        }

        if ($album->author_id !== $request->author_id) {
            $album->author_id = $request->author_id;
            $hasNewField = true;
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $album->image = $path;
            $hasNewField = true;
        }
        if ($hasNewField) {
            $album->update();
            return redirect(route('albums.show', ['id' => $id]))->with(['success' => 'Запись успешно обновлена!']);
        } else {
            return redirect(route('albums.show', ['id' => $id]));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->author->delete();
        $album->delete();
        return redirect(route('albums.index', ['id' => $id]))->with(['success' => 'Запись успешно удалена!']);
    }
}
