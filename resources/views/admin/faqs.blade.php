@extends('adminlte::page')

@section('title', 'FAQs-Admin')

@section('content_header')
    <h1>FAQs</h1>
@stop

@section('content')
<div class="container">
    <!-- Form to Create FAQ Category -->
    <h2>Create FAQ</h2>
    <form action="{{ route('faqs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="slogan" class="form-label">Slogan</label>
            <input type="text" class="form-control" name="slogan" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <input type="hidden" name="created_by" value="user_id">
        <button type="submit" class="btn btn-primary">Create FAQ</button>
    </form>

    <!-- FAQ Table -->
    <h2 class="mt-5">FAQs</h2>
    <table class="table table-striped">
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
            @foreach($faqs as $faq)
            <tr>
                <td>{{ $faq->id }}</td>
                <td>{{ $faq->slogan }}</td>
                <td>{{ $faq->description }}</td>
                <td>{{ $faq->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewSubcategoryModal-{{ $faq->id }}">View Subcategory</button>
                    <a href="{{ route('faqs.inactivate', $faq->id) }}" class="btn btn-warning">Inactivate</a>
                    <a href="#" class="btn btn-secondary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- View Subcategory Modal -->
    @foreach($faqs as $faq)
    <div class="modal fade" id="viewSubcategoryModal-{{ $faq->id }}" tabindex="-1" aria-labelledby="viewSubcategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewSubcategoryModalLabel">Subcategories for {{ $faq->slogan }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form to Create Subcategory -->
                    <form action="{{ route('faqs.list.store') }}" method="POST" class="mb-3">
                        @csrf
                        <input type="hidden" name="faqs_id" value="{{ $faq->id }}">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="sub_title" class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Subcategory</button>
                    </form>

                    <!-- Subcategory Table -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faq->faqsList as $list)
                            <tr>
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->title }}</td>
                                <td>{{ $list->sub_title }}</td>
                                <td>{{ $list->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('faqs.list.inactivate', $list->id) }}" class="btn btn-warning">Inactivate</a>
                                    <a href="#" class="btn btn-secondary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
