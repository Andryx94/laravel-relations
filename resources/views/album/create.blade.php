<h1>Aggiungi Album</h1>
<a href="{{ route('album.index') }}">< Torna Indietro</a>

<form action="{{ route('album.store') }}" method="post">
  @csrf
  @method('POST')

  <label for="title">Titolo</label>
  <input type="text" name="title" value="{{ old('title') }}">

  <label for="artist">Artista</label>
  <input type="text" name="artist" value="{{ old('artist') }}">

  <label for="year">Anno</label>
  <input type="number" name="year" value="{{ old('year') }}">

  <input type="submit" value="Invia">
</form>
