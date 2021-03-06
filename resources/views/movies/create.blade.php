<h1>Crea il tuo film</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li> Errore: {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('movies.store') }}" method="POST">
    @csrf

    @method('POST')

    <div>
        <label>Titolo</label>
    <input type="text" name="nome_film" value="{{ old('nome_film')}}">
    </div>

    <div>
        <label>Anno</label>
        <input type="text" step="any" name="anno" value="{{ old('anno')}}">
    </div>

    <div>
        <label>Voto</label>
        <input type="text" step="any" name="voto" value="{{ old('voto')}}">
    </div>

    <div>
        <input type="submit" value="Salva il tuo film">
    </div>

</form>