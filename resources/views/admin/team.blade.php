@extends('adminlte::page')

@section('title', 'Team-Admin')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')

<div class="container">
    <!-- Form to Create Team Member -->
    <h2>Create New Team Member</h2>
    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" class="form-control" id="slogan" name="slogan" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title">
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook URL</label>
            <input type="url" class="form-control" id="facebook" name="facebook">
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter URL</label>
            <input type="url" class="form-control" id="twitter" name="twitter">
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram URL</label>
            <input type="url" class="form-control" id="instagram" name="instagram">
        </div>
        <div class="mb-3">
            <label for="linkedln" class="form-label">LinkedIn URL</label>
            <input type="url" class="form-control" id="linkedln" name="linkedln">
        </div>
        <input type="hidden" name="created_by" value="Admin"> <!-- Update this as necessary -->
        <button type="submit" class="btn btn-primary">Add Team Member</button>
    </form>

    <!-- Table to Display Team Members -->
    <h2 class="mt-5">Team Members</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slogan</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->slogan }}</td>
                <td>{{ $team->job_title }}</td>
                <td>{{ $team->user_status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('teams.activate', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm {{ $team->user_status == 1 ? 'btn-danger' : 'btn-success' }}">
                            {{ $team->user_status == 1 ? 'Deactivate' : 'Activate' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
