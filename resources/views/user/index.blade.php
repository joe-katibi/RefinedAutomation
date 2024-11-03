@extends('adminlte::page')

@section('title', 'Message-Users')

@section('content_header')
<div class="container">
    <h2 class="text-center my-4">Messages and Replies</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form to Add a New Message --}}
    <div class="card mb-4">
        <div class="card-header">Submit a New Message</div>
        <div class="card-body">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="project">Project</label>
                    <input type="text" name="project" id="project" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Message</button>
            </form>
        </div>
    </div>

    {{-- Display Messages with Replies --}}
    <div class="card">
        <div class="card-header">Messages</div>
        <div class="card-body">
            @forelse($messages as $message)
                <div class="border-bottom mb-4 pb-2">
                    <h5>{{ $message->subject }}</h5>
                    <p><strong>Project:</strong> {{ $message->project }}</p>
                    <p><strong>Description:</strong> {{ $message->description }}</p>

                    {{-- Replies --}}
                    @foreach($message->replies as $reply)
                        <div class="ml-4 border-left pl-3">
                            <p>{{ $reply->message_text }}</p>
                            <small>Replied on {{ $reply->created_at->format('d M Y, H:i') }}</small>
                        </div>
                    @endforeach

                    {{-- Reply Form --}}
                    <form action="{{ route('messages.replyStore', $message->id) }}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label for="message_text">Add a Reply</label>
                            <textarea name="message_text" id="message_text" class="form-control" rows="2" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm">Reply</button>
                    </form>
                </div>
            @empty
                <p>No messages found.</p>
            @endforelse
        </div>
    </div>
</div>


@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
