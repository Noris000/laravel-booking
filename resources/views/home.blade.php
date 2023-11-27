@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Rooms</h1>
    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $room->image_url }}" class="card-img-top" alt="{{ $room->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->name }}</h5>
                        <p class="card-text">{{ $room->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Room Number: {{ $room->room_nr }}</li>
                        <li class="list-group-item">Price: ${{ $room->price }}</li>
                    </ul>
                    <div class="card-body">
                        <!-- You can add booking button or form here -->
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection