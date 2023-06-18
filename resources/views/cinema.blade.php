<?php
/**
 * @var \App\Models\Cinema[] $cinema
 */
?>

<h1 class="text-center">Cinema Info</h1>
@foreach ($cinemas as $cinema)
    <ul>
        <li>{{ $cinema->name }} - {{ $cinema->address }}</li>
    </ul>
@endforeach
