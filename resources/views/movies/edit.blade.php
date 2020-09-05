<h1>modifica {{ $movie->nome_film }}</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li> Errore: {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('movies.update', $movie->id) }}" method="POST">
    @csrf

    @method('PUT')

    <div>
        <label>Titolo</label>
    <input type="text" name="nome_film" value="{{ $movie->nome_film }}">
    </div>

    <div>
        <label>Anno</label>
    <input type="text" step="any" name="anno" value="{{ $movie->anno }}">
    </div>

    <div>
        <label>Voto</label>
    <input type="text" step="any" name="voto" value="{{ $movie->voto}}">
    </div>

    <div>
        <input type="submit" value="Salva il tuo film">
    </div>

</form>

<a href="{{route('movies.index')}}">Torna alla home</a>