<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    //index di Comic

     public function index()
            {
            $comics = Comic::all();
            return view('comics.index', compact('comics'));
            }

            public function show($id)
            {
            $comic = Comic::find($id);
            return view('comics.show', compact('comic'));
            }

            public function create()
            {
            return view('comics.create');
            }

            public function store(Request $request)
            {
            $data = $request->all();
            $newComic = new Comic();
            $newComic->fill($data);
            $newComic->save();
            return redirect()->route('comics.index');
            }

            public function edit($id)
            {
            $comic = Comic::find($id);
            return view('comics.edit', compact('comic'));
            }

            public function update(Request $request, $id)
            {
            $data = $request->all();
            $comic = Comic::find($id);
            $comic->update($data);
            return redirect()->route('comics.show', $comic->id);
            }

            public function destroy($id)
            {
            $comic = Comic::find($id);
            $comic->delete();
            return redirect()->route('comics.index');
            }
}
