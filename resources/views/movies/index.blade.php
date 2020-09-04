<h1>Lista dei film nel database</h1>

{{--  link per creare il proprio film --}}
<a href="{{ route('movies.create') }}">Crea il tuo film</a>

{{-- ciclo foreach --}}
@foreach ($movies as $movie)

    <h3>Titolo film: {{ $movie->nome_film }} </h3> 

    <p> Anno: {{ $movie->anno }}</p>

    <p> Voto: {{ $movie->voto }}</p>

<a href="{{ route('movies.show', $movie->id) }}">dettagli</a>

@endforeach 


