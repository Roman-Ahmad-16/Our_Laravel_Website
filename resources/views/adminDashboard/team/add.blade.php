@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'Add Team Member')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-2">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Add Team Member') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Image') }} <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                        <img class="mw-400 mb-3 show-img img-demo" src="{{ asset('assets/admin/img/img-demo.jpg') }}" alt="">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="image">{{ __('Choose New Image') }}</label>
                                            <input type="file" class="custom-file-input up-img" name="image" id="image">
                                        </div>
                                        @if ($errors->has('image'))
                                                <p class="text-danger"> {{ $errors->first('image') }} </p>
                                            @endif
                                        <p class="help-block text-info">{{ __('Upload 1920X910 (Pixel) Size image for best quality.
                                                                Only jpg, jpeg, png image is allowed.') }}
                                        </p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Name') }}<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="{{ __('name') }}" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <p class="text-danger"> {{ $errors->first('name') }} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Designation') }}</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="designation" placeholder="{{ __('designation') }}" value="{{ old('designation') }}">
                                            @if ($errors->has('designation'))
                                                <p class="text-danger"> {{ $errors->first('designation') }} </p>
                                            @endif
                                        </div>
                                    </div>


                             
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                        </div>
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