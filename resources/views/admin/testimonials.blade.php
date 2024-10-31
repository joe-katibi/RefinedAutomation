@extends('adminlte::page')

@section('title', 'testimonal-Admin')

@section('content_header')
    <h1>testimonal</h1>
@stop

@section('content')
<div class="container">
    <!-- Form to Create Testimonial -->
    <h2>Create Testimonial</h2>
    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="slogan">Slogan</label>
            <input type="text" class="form-control" name="slogan" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Testimonial</button>
    </form>

    <!-- Testimonials Table -->
    <h3 class="mt-4">Testimonials</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Slogan</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->slogan }}</td>
                <td>{{ $testimonial->description }}</td>
                <td>{{ $testimonial->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <form action="{{ route('testimonials.status', $testimonial->id) }}" method="POST" style="display:inline;">
                        @csrf @method('PUT')
                        <button class="btn btn-warning">{{ $testimonial->status ? 'Deactivate' : 'Activate' }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form to Create Testimonials List -->
    <h2 class="mt-5">Create Testimonial Entry</h2>
    <form action="{{ route('testimonials_list.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="text" class="form-control" name="avatar">
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" class="form-control" name="profession" required>
        </div>
        <div class="form-group">
            <label for="testimony">Testimony</label>
            <textarea class="form-control" name="testimony" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Testimonial Entry</button>
    </form>

    <!-- Testimonials List Table -->
    <h3 class="mt-4">Testimonials List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Profession</th>
                <th>Testimony</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonialLists as $testimonialList)
            <tr>
                <td>{{ $testimonialList->name }}</td>
                <td>{{ $testimonialList->profession }}</td>
                <td>{{ $testimonialList->testimony }}</td>
                <td>{{ $testimonialList->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <form action="{{ route('testimonials_list.status', $testimonialList->id) }}" method="POST" style="display:inline;">
                        @csrf @method('PUT')
                        <button class="btn btn-warning">{{ $testimonialList->status ? 'Deactivate' : 'Activate' }}</button>
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
