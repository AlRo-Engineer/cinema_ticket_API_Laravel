<h1 class="text-center">Hall Info</h1>
@foreach ($halls as $hall)
    <ul>
        <li>{{ $hall->id }} - {{ $hall->cinema->name }} - {{ $hall->name }}</li>
    </ul>
@endforeach
