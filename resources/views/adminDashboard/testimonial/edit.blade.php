@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'Edit Testimonial')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-2">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">Edit Testimonial</h3>
                                
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-primary btn-sm float-right"><i
                                    class="fas fa-list"></i> Testimonial List</a>
                            </div>
                            <!-- /.card-header -->
                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{ route('testimonial.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
        

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="image">Image</label>
                                                <input type="file" name='image' id='image' class="form-control" value="{{ old('image',$testimonial->image) }}">
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                                <div class="col-md-6">
                                                <label for="name">Name</label>
                                                <input type="text" name='name' id='name' class="form-control" value="{{ old('name',$testimonial->name) }}">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                <label for="designation">Designation</label>
                                                <input type="text" name='designation' id='designation' class="form-control" value="{{ old('designation',$testimonial->designation)}}">
                                                @error('designation')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                                <div class="col-md-6">
                                                <label for="feedback">Feedback</label>
                                                <input type="text" name='feedback' id='feedback' class="form-control" value="{{ old('feedback',$testimonial->feedback) }}">
                                                @error('feedback')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="active" {{ $testimonial->status == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $testimonial->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                    @error('status')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                <label for="order">Order</label>
                                                <input type="number" name='order' id='order' class="form-control"value="{{ old('order',$testimonial->order) }}">
                                                @error('order')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                            </div>

                                    </div>
                                    <div class="card-footer text-right">
                                    <button type="submit"
                                        class="btn btn-sm btn-primary">Save Testimonial</button>
                                    </div>

                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
