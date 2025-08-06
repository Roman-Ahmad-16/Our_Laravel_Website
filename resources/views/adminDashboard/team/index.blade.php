@extends('adminDashboard.layouts.adminDashboard')
@section('title', 'List of Team')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Team List') }}</h3>
                        <div class="card-tools d-flex">
                            <div class="d-inline-block mr-4"></div>
                            <a href="{{ route('teams.add') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> {{ __('Add Team') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered w-100 data_table">
                            <thead>
                                <tr>
                                    <th>SR #</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $id => $team)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img class="w-80" src="{{ asset('uploads/teams/'. $team->image) }}" style="width: 50px;" />
                                        </td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->designation }}</td>
                                        <td>
                                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                                            </a>
                                            <form class="d-inline-block delete-form" action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
