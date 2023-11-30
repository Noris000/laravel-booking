@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Booking Details</h1>
    <div class="card">
        <!-- Display room details here -->
        <div class="card-body">
            <h5 class="card-title">{{ $room->name }}</h5>
            <p class="card-text">{{ $room->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Room Number: {{ $room->room_nr }}</li>
            <li class="list-group-item">Price: ${{ $room->price }}</li>
        </ul>
    </div>
</div>
@endsection