<html>
<head>
<title>Studio</title>
</head>
<body>
  @foreach (App\Studio::all() as $studio)
    <h1>{{ $studio->name }}</h1>
    <ul>
  @forelse ($studio->movies as $movie)
    <li>{{ $movie->name }}</li>
  @empty
    Tidak ada film untuk studio ini.
  @endforelse
    </ul>
  @endforeach
</body>
</html>
