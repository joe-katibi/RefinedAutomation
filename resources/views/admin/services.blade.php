@extends('adminlte::page')

@section('title', 'services-Admin')

@section('content_header')
    <h1>Services</h1>
@stop

@section('content')
<div class="container">

    <!-- Create/Edit Service Form -->
    <h2>{{ isset($service) ? 'Edit Service' : 'Create New Service' }}</h2>
    <form action="{{ isset($service) ? route('services.update', $service->id) : route('services.store') }}" method="POST">
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" class="form-control" id="slogan" name="slogan" value="{{ $service->slogan ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $service->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($service) ? 'Update Service' : 'Add Service' }}</button>
    </form>

    <!-- Table to Display Services -->
    <h2 class="mt-5">Service List</h2>
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
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->slogan }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    <form action="{{ route('services.activate', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-success">Activate</button>
                    </form>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Create/Edit Category Form -->
    <h2>{{ isset($category) ? 'Edit Category' : 'Create Service Category' }}</h2>
    <form action="{{ isset($category) ? route('services_list.update', $category->id) : route('services_list.store') }}" method="POST">
        @csrf
        @if(isset($category))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $category->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update Category' : 'Add Category' }}</button>
    </form>

    <!-- Table to Display Categories with Subcategories Modal -->
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
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#subcategoriesModal{{ $category->id }}">
                        View Subcategories
                    </button>
                    <a href="{{ route('services_list.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <!-- Modal for Subcategories -->
                    <div class="modal fade" id="subcategoriesModal{{ $category->id }}" tabindex="-1" aria-labelledby="subcategoriesModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="subcategoriesModalLabel">Subcategories for {{ $category->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <a href="{{ route('services_list_more.create', $category->id) }}" class="btn btn-primary btn-sm ms-auto">Add Subcategory</a>
                                </div>
                                <div class="modal-body">
                                    @if($category->subcategories->isEmpty())
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
                                                @foreach($category->subcategories as $subcategory)
                                                <tr>
                                                    <td>{{ $subcategory->title }}</td>
                                                    <td>{{ $subcategory->sub_title }}</td>
                                                    <td>
                                                        <a href="{{ route('services_list_more.edit', $subcategory->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                        <form action="{{ route('services_list_more.activate', $subcategory->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-sm btn-success">Activate</button>
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
