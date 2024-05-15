@extends('layout.main')



@section('content')

    <h1>Available Cars</h1>
    <form action="{{ route('cars.search') }}" method="GET">
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" placeholder="Search by brand">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Search by model">
        </div>
        <div class="form-group">
            <label for="is_available">Availability</label>
            <select name="is_available" class="form-control" id="is_available">
                <option value="">All</option>
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Search</button>
    </form>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>License Plate</th>
                <th>Rental Rate</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->license_plate }}</td>
                    <td>{{ $car->rental_rate }}</td>
                    <td>{{ $car->is_available ? 'Available' : 'Not Available' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Rent a Car</h1>
    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="car_id">Select Car</label>
            <select name="car_id" class="form-control" id="car_id" required>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->brand }} - {{ $car->model }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" id="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control" id="end_date" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Rent Car</button>
    </form>

@endsection
