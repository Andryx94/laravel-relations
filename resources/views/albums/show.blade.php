<h1>{{ $album->title }} ({{ $album->year }})</h1>

<ul>
  @foreach ($album->songs as $song)
    <li>
      <p>{{ $song->title }} ({{ $song->genre }})</p>
    </li>
  @endforeach
</ul>

<a href="{{ route('albums.index') }}">< Torna Indietro</a>
