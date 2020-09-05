<h1>Titolo film: {{ $movie->nome_film }}</h1>

<p>Anno di uscita: {{ $movie->anno }}</p>

<p>Voto: {{ $movie->voto }}</p>

<a href="{{ route('movies.index') }}">Torna indietro</a>
<a href="{{ route('movies.edit', $movie->id) }}">Modifica il tuo film</a>