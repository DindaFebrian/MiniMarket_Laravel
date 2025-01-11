@extends('layouts.app')

@section('title', 'Edit Branch')

@section('content')
    <h1 class="mb-4">Edit Branch</h1>

    <form action="{{ route('branches.update', $branch->id) }}" method="POST">
        @csrf <!-- Token keamanan untuk mencegah CSRF -->
        @method('PUT') <!-- Metode HTTP PUT untuk update -->

        <!-- Branch Name -->
        <div class="form-group mb-3">
            <label for="branch_name" class="form-label">Branch Name</label>
            <input
                type="text"
                name="branch_name"
                id="branch_name"
                class="form-control"
                placeholder="Enter branch name"
                value="{{ old('branch_name', $branch->branch_name) }}"
                required
            >
        </div>

        <!-- Address -->
        <div class="form-group mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea
                name="address"
                id="address"
                class="form-control"
                rows="3"
                placeholder="Enter address"
                required>{{ old('address', $branch->address) }}</textarea>
        </div>

        <!-- City -->
        <div class="form-group mb-3">
            <label for="city" class="form-label">City</label>
            <input
                type="text"
                name="city"
                id="city"
                class="form-control"
                placeholder="Enter city"
                value="{{ old('city', $branch->city) }}"
                required
            >
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-start mt-4">
            <button type="submit" class="btn btn-primary me-2">Save Changes</button>
            <a href="{{ route('branches.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
@endsection
