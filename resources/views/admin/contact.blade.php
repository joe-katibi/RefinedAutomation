@extends('adminlte::page')

@section('title', 'contact-Admin')

@section('content_header')
    <h1>Contact Info</h1>
@stop

@section('content')
<div class="container">
    <!-- Form for Creating a New Contact -->
    <h2>Create New Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Location</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook">
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter">
        </div>
        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp">
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram">
        </div>
        <div class="mb-3">
            <label for="linkedln" class="form-label">LinkedIn</label>
            <input type="text" class="form-control" id="linkedln" name="linkedln">
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created By</label>
            <input type="text" class="form-control" id="created_by" name="created_by" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Contact</button>
    </form>

    <!-- Table to Display Contacts -->
    <h2 class="mt-5">Contact List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->location }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    <!-- Edit Action -->
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <!-- Activate Action -->
                    <form action="{{ route('contacts.activate', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-success">Activate</button>
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
