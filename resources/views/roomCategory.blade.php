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
                    <div class="card-header">{{ __('Add Room Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('roomCategory.submit') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Add Room Category') }}</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">{{ __('Room Categories') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Room Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\RoomCategory::all() as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('roomCategory.delete', ['roomCategory' => $category->id]) }}"
                                                class="btn btn-danger">Delete</a>
                                            {{-- <form action="{{ route('roomcategories.destroy', $category->id) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
