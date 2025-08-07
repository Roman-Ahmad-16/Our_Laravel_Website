@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'List of Testmonials')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Testimonial List</h3>
                        <a href="{{ route('testimonial.add') }}" class="btn btn-sm btn-primary float-right">
                            <i class="fas fa-plus"></i> Add Testimonial
                        </a>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped data_table w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Feedback</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th width="180px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td>
                                            @if($testimonial->image)
                                                <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                                    class="img-thumbnail rounded-circle" style="height: 50px; width: 50px;">
                                            @endif
                                        </td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->designation }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($testimonial->feedback, 50) }}</td>
                                        <td>{{ $testimonial->order }}</td>
                                        <td>
                                            <span class="badge {{ $testimonial->status === 'active' ? 'badge-success' : 'badge-secondary' }}">
                                                {{ ucfirst($testimonial->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <form action="{{ route('testimonial.delete', $testimonial->id) }}"
                                                  method="POST" class="d-inline-block delete-form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $testimonial->id }}">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
