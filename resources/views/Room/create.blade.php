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
                    <div class="card-header">{{ __('Create Room') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('room.submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="status" class="form-label">Room Category</label>
                                <select class="form-select @error('room_category_id') is-invalid @enderror" name="room_category_id">
                                    <option value="">Choose</option>
                                    @foreach ($room_cats as $room_cat)
                                        <option value="{{$room_cat->id}}">{{ $room_cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('room_category_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="room_number" class="form-label">Room Number</label>
                                <input type="text" class="form-control @error('room_number') is-invalid @enderror"
                                    id="room_number" name="room_number" value="{{ old('room_number') }}">
                                @error('room_number')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_of_bed" class="form-label">No. of Beds</label>
                                <input type="number" class="form-control @error('no_of_bed') is-invalid @enderror"
                                    id="no_of_bed" name="no_of_bed" value="{{ old('no_of_bed') }}">
                                @error('no_of_bed')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select @error('status') is-invalid @enderror" name="status">
                                    <option value="">Choose</option>
                                    <option value="1" @if (old('status') == 1) selected @endif>Available
                                    </option>
                                    <option value="2" @if (old('status') == 2) selected @endif>Booked
                                    </option>
                                    <option value="3" @if (old('status') == 3) selected @endif>Not Available
                                    </option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price') }}">
                                @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image">
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="amenities" class="form-label">Amenities</label>
                                @foreach ($amenities as $amenity)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $amenity->id }}"
                                            id="amenity-{{ $amenity->id }}" name="amenities[]"
                                            @if(is_array(old('amenities')) && in_array($amenity->id, old('amenities'))) checked @endif>

                                        <label class="form-check-label" for="amenity-{{ $amenity->id }}">
                                            {{ $amenity->name }}
                                        </label>
                                    </div>
                                @endforeach
                                @error('amenities')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
