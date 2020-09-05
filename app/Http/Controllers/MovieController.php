<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{

    // Funzione INDEX
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    // funzione STORE
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nome_film' => 'required',
            'anno' => 'required',
            'voto' => 'required'
            ]);
        
        $data = $request->all();

        // validiamo il nuovo film creato dall'utente

        $movie = new Movie;
        $movie->nome_film = $data['nome_film'];
        $movie->anno = $data['anno'];
        $movie->voto = $data['voto'];
        $saved = $movie->save();
        
        if($saved) {
            
            $movie = Movie::orderBy('id', 'desc')->first();

            return redirect()->route('movies.show', $movie);
        }
    }   

    // FUNZIONE SHOW
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $movie = Movie::find($id);

        if(empty($movie)) {  
            abort(404);
        }

        return view('movies.show', compact('movie'));
    }


    // FUNZIONE EDIT
    /**
     * Show the form for editing the specified resource.
     * mostra il form per modificare la specifica risorsa
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $movie = Movie::find($id);

        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * // la funzione update fa il salvataggio delle modifiche dei dati nel database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {   
        $request->validate([
            'nome_film' => 'required',
            'anno' => 'required',
            'voto' => 'required'
            ]);
        
        $data = $request->all();
        $movie->update($data);

        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $movie = Movie::find($id);  

        $movie->delete();

        return redirect()->route('movies.index');
    }
}
