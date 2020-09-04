<h1>Lista dei film nel database</h1>

@foreach ($movies as $movie)

    <h3>Titolo film: {{ $movie->nome_film }} </h3> 

    <p> Anno: {{ $movie->anno }}</p>

    <p> Voto: {{ $movie->voto }}</p>

<a href="{{ route('movies.show', $movie->id) }}">dettagli</a>

@endforeach 

