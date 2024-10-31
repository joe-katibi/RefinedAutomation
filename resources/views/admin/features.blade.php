@extends('adminlte::page')

@section('title', 'Features-Admin')

@section('content_header')
    <h1>Features</h1>
@stop

@section('content')
    <!-- Create Feature Form -->
    <h2>Create Feature</h2>
    <form action="{{ route('features.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" class="form-control" id="slogan" name="slogan" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Feature</button>
    </form>

    <!-- Table of Features -->
    <h2 class="mt-5">Feature List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Slogan</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($features as $feature)
            <tr>
                <td>{{ $feature->id }}</td>
                <td>{{ $feature->slogan }}</td>
                <td>{{ $feature->description }}</td>
                <td>{{ $feature->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger btn-sm">Inactivate</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Create Category for Feature List -->
    <h2>Create Feature Category</h2>
    <form action="{{ route('feature_list.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>

    <!-- Categories Table -->
    <h2 class="mt-5">Categories</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featureLists as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#subcategoryModal{{ $category->id }}">
                        View Subcategories
                    </button>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>

            <!-- Subcategory Modal -->
            <div class="modal fade" id="subcategoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Subcategories of {{ $category->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if($category->featureListMores->isEmpty())
                                <p>No subcategories available.</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Subtitle</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category->featureListMores as $subcategory)
                                        <tr>
                                            <td>{{ $subcategory->title }}</td>
                                            <td>{{ $subcategory->sub_title }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="#" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-danger btn-sm">Inactivate</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
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
