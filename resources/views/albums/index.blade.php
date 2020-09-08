<h1>Albums</h1>

<ul>
  @foreach ($albums as $album)
    <li>
      <p>{{ $album->title }}</p>
      <p>Artista: {{ $album->artist }}</p>
      <p>Anno: {{ $album->year }}</p>
      <a href="{{ route('albums.show',$album) }}">Lista Canzoni ></a>
    </li>
  @endforeach
</ul>
