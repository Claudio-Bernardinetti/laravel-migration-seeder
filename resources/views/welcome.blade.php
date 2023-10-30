@extends('layouts.app')

@section('title', 'Trains')

@section('content')

<h1>Train Table</h1>
<table>
    <tr>
        <th>Company</th>
        <th>Departure Station</th>
        <th>Arrival Station</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Train Code</th>
        <th>Number of Carriages</th>
        <th>On Time</th>
        <th>Cancelled</th>
    </tr>

    @foreach ($trains as $train)
        <tr>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->number_of_carriages }}</td>
            <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
            <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
        </tr>
    @endforeach
</table>
@endsection