@extends('layouts.app')

@section('content')
<table>
    <tr>
        <th>Company</th>
        <th>Departure Station</th>
        <th>Arrival Station</th>
        <!-- Add more columns as needed -->
    </tr>

    @foreach ($trains as $train)
        <tr>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <!-- Add more data as needed -->
        </tr>
    @endforeach
</table>

@endsection