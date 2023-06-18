<h1 class="text-center">Seats Information for {{ $status }}</h1>

<table border="1">
    <thead>
    <tr>
        <th>Seat</th>
        <th>Row</th>
        <th>Hall</th>
        <th>Cinema</th>
    </tr>
    </thead>
    <tbody>
    @foreach($seatsInfo as $seatInfo)
        <tr>
            <td>{{ $seatInfo->number }}</td>
            <td>{{ $seatInfo->row }}</td>
            <td>{{ $seatInfo->hall_name }}</td>
            <td>{{ $seatInfo->cinema_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
