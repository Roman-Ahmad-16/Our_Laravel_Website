@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'Add Testimonial')
@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Add New Testimonial</h4>
            <a href="{{ route('testimonial.index') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Back to Testimonial List
            </a>
        </div>

        <div class="card-body">
            {{-- Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Add Testimonial Form --}}
            <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="designation">Designation:</label>
                    <input type="text" name="designation" id="designation" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="feedback">Feedback:</label>
                    <textarea name="feedback" id="feedback" rows="4" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="order">Order:</label>
                    <input type="number" name="order" id="order" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image">Profile Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Save Testimonial
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
