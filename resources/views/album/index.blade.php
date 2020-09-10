<h1>Album</h1>

<ul>
  @foreach ($albums as $album)
    <li>      
      <p>{{ $album->title }}</p>
      <img src="{{$album->cover->url}}" alt="">
      <p>Artista: {{ $album->artist }}</p>
      <p>Anno: {{ $album->year }}</p>
      <a href="{{ route('album.show',$album) }}">Lista Canzoni ></a>
    </li>
  @endforeach
</ul>
