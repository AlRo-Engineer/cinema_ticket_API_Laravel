<h1 class="text-center">Seances on {{ $date }}</h1>
@foreach ($seances as $seance)
    <p>{{ $seance->datetime }} - {{ $seance->hall->name ?? 'No Cinema' }} - {{ $seance->movie->name ?? 'No Movie' }}</p>
@endforeach
