@extends('adminlte::page')

@section('title', 'Offers-Admin')

@section('content_header')
    <h1>Offers</h1>
@stop

@section('content')

<div class="container">
    <!-- Form to Create Offer -->
    <h2>Create Offer</h2>
    <form action="{{ route('offers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="slogan">Slogan</label>
            <input type="text" class="form-control" name="slogan" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Offer</button>
    </form>

    <!-- Offers Table -->
    <h3 class="mt-4">Offers</h3>
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
            @foreach ($offers as $offer)
            <tr>
                <td>{{ $offer->slogan }}</td>
                <td>{{ $offer->description }}</td>
                <td>{{ $offer->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <form action="{{ route('offers.status', $offer->id) }}" method="POST" style="display:inline;">
                        @csrf @method('PUT')
                        <button class="btn btn-warning">{{ $offer->status ? 'Deactivate' : 'Activate' }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Form to Create Offers List -->
    <h2 class="mt-5">Create Offers List</h2>
    <form action="{{ route('offers_list.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="offers_id">Offer</label>
            <select class="form-control" name="offers_id" required>
                @foreach ($offers as $offer)
                    <option value="{{ $offer->id }}">{{ $offer->slogan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="header">Header</label>
            <input type="text" class="form-control" name="header" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Offer List</button>
    </form>

    <!-- Offers List Table -->
    <h3 class="mt-4">Offers List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Header</th>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offersLists as $offerList)
            <tr>
                <td>{{ $offerList->header }}</td>
                <td>{{ $offerList->title }}</td>
                <td>{{ $offerList->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#subCategoryModal{{ $offerList->id }}">View Subcategories</button>
                    <form action="{{ route('offers_list.status', $offerList->id) }}" method="POST" style="display:inline;">
                        @csrf @method('PUT')
                        <button class="btn btn-warning">{{ $offerList->status ? 'Deactivate' : 'Activate' }}</button>
                    </form>
                </td>
            </tr>

            <!-- Modal for Viewing Offers List More -->
            <div class="modal fade" id="subCategoryModal{{ $offerList->id }}" tabindex="-1" role="dialog" aria-labelledby="subCategoryModalLabel{{ $offerList->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="subCategoryModalLabel{{ $offerList->id }}">Subcategories for {{ $offerList->header }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Header</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offerList->offersListMore as $subCategory)
                                    <tr>
                                        <td>{{ $subCategory->header }}</td>
                                        <td>{{ $subCategory->title }}</td>
                                        <td>{{ $subCategory->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <form action="{{ route('offers_list_more.status', $subCategory->id) }}" method="POST" style="display:inline;">
                                                @csrf @method('PUT')
                                                <button class="btn btn-warning">{{ $subCategory->status ? 'Deactivate' : 'Activate' }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
