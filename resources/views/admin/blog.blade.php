@extends('adminlte::page')

@section('title', 'blog-Admin')

@section('content_header')
    <h1>Blog</h1>
@stop

@section('content')

<div class="container">
    <!-- Create Blog Form -->
    <form action="{{ route('blogs.storeBlog') }}" method="POST">
        @csrf
        <h4>Create New Blog</h4>
        <input type="text" name="slogan" placeholder="Slogan" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Create Blog</button>
    </form>

    <!-- Blog List Table -->
    <h5>Blogs</h5>
    <table>
        <thead>
            <tr>
                <th>Slogan</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->slogan }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <form action="{{ route('blogs.inactivateBlog', $blog->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Inactivate</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Create Blog List Form -->
    <form action="{{ route('blogs.storeBlogList') }}" method="POST">
        @csrf
        <h4>Create New Blog List</h4>
        <select name="blog_id" required>
            <option>Select Blog</option>
            @foreach($blogs as $blog)
                <option value="{{ $blog->id }}">{{ $blog->slogan }}</option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="image" placeholder="Image URL" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Create Blog List</button>
    </form>

    <!-- Modal for Blog List More -->
    <div id="blogListMoreModal" class="modal">
        <div class="modal-content">
            <h4>Blog List More</h4>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Blog List More items will go here dynamically via JavaScript or backend handling -->
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
