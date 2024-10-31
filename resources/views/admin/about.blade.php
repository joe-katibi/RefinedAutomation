@extends('adminlte::page')

@section('title', 'About-Admin')

@section('content_header')
    <h1>About Us </h1>
@stop

@section('content')
<div class="container">
    <!-- Form for Creating a New Entry -->
    <h2>Create New Entry</h2>
    <form action="{{ route('about_us.store') }}" method="POST">
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
            <label for="created_by" class="form-label">Created By</label>
            <input type="text" class="form-control" id="created_by" name="created_by" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Entry</button>
    </form>

    <!-- Table to Showcase Entries -->
    <h2 class="mt-5">About Us Entries</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Slogan</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created By</th>
                <th>Edited By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
            <tr>
                <td>{{ $entry->id }}</td>
                <td>{{ $entry->slogan }}</td>
                <td>{{ $entry->description }}</td>
                <td>{{ $entry->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>{{ $entry->created_by }}</td>
                <td>{{ $entry->edited_by ?? 'N/A' }}</td>
                <td>
                    <!-- Edit Action -->
                    <a href="{{ route('about_us.edit', $entry->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <!-- Inactivate Action -->
                    <form action="{{ route('about_us.inactivate', $entry->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-danger">Inactivate</button>
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
