@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($rooms as $room)
        <div class="card">
        <p>{{$room->room_nr}}
            {{$room->name}}
            {{$room->description}}
            {{$room->price}}
        </p>
        {{-- gfdsuuufgfhffhfhg --}}
        </div>
        
    @endforeach
</div>
@endsection
