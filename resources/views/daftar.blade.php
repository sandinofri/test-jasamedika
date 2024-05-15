@extends('layout.main')



@section('content')

    <h1>My Rentals</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Car</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->car->brand }} - {{ $rental->car->model }}</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
