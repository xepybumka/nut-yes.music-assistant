<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Author;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthorsController extends Controller
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
            $authors = Author::where('authors.name', 'like', '%'.$filter.'%')
                ->paginate(5);
        } else {
            $authors = Author::paginate(5);
        }
        $title = 'Авторы';
        return view('author.index')
            ->with('title', $title)
            ->with('authors', $authors)
            ->with('filter', $filter);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Добавление автора';
        return view('author.create')
            ->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $author->image = $path;
        }
        $author->save();
        return back()->withInput()->with('success', 'Запись успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $author = Author::find($id);
        $title = 'Детальная страница: '.$author->name;
        return view('author.show')
            ->with('title', $title)
            ->with('author', $author);
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
