@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'Edit Team Member')
@section('content')



<div class="container">
    <h2>Edit Team Member</h2>
<form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label>Designation:</label>
            <input type="text" name="designation" class="form-control" value="{{ old('designation', $team->designation) }}" required>
            @error('designation')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label>Old Image:</label><br>
            <img src="{{ asset('uploads/teams/'.$team->image) }}" width="100"><br>


            <label>New Image (optional):</label>
            <input type="file" name="image" class="form-control mt-2">
            
            @error('image')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection