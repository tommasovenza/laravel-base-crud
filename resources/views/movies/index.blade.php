<h1>Lista dei film nel database</h1>

{{--  link per creare il proprio film --}}
<a href="{{ route('movies.create') }}">Crea il tuo film</a>

{{-- ciclo foreach --}}
@foreach ($movies ?? '' as $movie)

    <h3>Titolo film: {{ $movie->nome_film }} </h3> 

    <p> Anno: {{ $movie->anno }}</p>

    <p> Voto: {{ $movie->voto }}</p>

    <a href="{{ route('movies.show', $movie->id) }}">dettagli</a>
    <a href="{{ route('movies.edit', $movie->id) }}">modifica film</a>
    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
        @csrf
    
        @method('DELETE')
    
        <input type="submit" value="elimina">
    </form>

@endforeach 


