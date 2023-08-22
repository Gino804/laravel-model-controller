<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movies</title>
  @vite('resources/js/app.js')
</head>

<body>
  <main>

    <div class="container">
      <div class="row">
        @foreach ($movies as $movie)
          <div class="column">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{ $movie->title }} @if ($movie->title != $movie->original_title)
                    | {{ $movie->original_title }}
                  @endif
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->date }}</h6>
                <p class="card-text">Valutazione: {{ $movie->vote }}/10</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </main>
</body>

</html>
