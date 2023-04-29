@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Rooms') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Room Number</th>
                                    <th>Description</th>
                                    <th>No. of Beds</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Amenities</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!is_null($rooms))
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ $room->name }}</td>
                                            <td>{{ $room->room_number }}</td>
                                            <td>{{ $room->description }}</td>
                                            <td>{{ $room->no_of_bed }}</td>
                                            <td>
                                                @if ($room->status == 1)
                                                    Available
                                                @elseif ($room->status == 2)
                                                    Booked
                                                @elseif ($room->status == 3)
                                                    Not Available
                                                @endif
                                            </td>
                                            <td>{{ $room->price }}</td>
                                            <td>
                                                @if (!is_null($room->amenities))
                                                    @foreach ($room->amenities as $amenity)
                                                        {{ $amenity->name }},
                                                    @endforeach
                                                @else
                                                    No amenities found.
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('room.delete', ['room' => $room->id]) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">No rooms found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
