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
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:users|max:255',
                'password' => 'required|confirmed|min:6',
            ]);

    // codice per salvare i dati nel database + metodo validate
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
             
            // PARTE 3: AGGIUNGI DESTROY FUNCTION
            public function destroy($id)
            {
            $comic = Comic::find($id);
            $comic->delete();
            return redirect()->route('comics.index');
            }
}
