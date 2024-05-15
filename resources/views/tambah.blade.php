@extends('layout.main')

@section('content')

    <h1>Add New Car</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" id="brand" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" required>
        </div>
        <div class="form-group">
            <label for="license_plate">License Plate</label>
            <input type="text" name="license_plate" class="form-control" id="license_plate" required>
        </div>
        <div class="form-group">
            <label for="rental_rate">Rental Rate (per day)</label>
            <input type="number" name="rental_rate" class="form-control" id="rental_rate" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Add Car</button>
    </form>

@endsection
