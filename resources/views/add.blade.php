@extends('layouts.main')
@section('content')
<form method="POST" action="/dealer" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Rating</label>
        <input type="text" class="form-control" id="location" name="location" required>
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Description</label>
        <input type="text" class="form-control" id="body" name="body" required>
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Genre</label>
        <input type="text" class="form-control" id="author" name="author" required>
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Published At</label>
        <input type="text" class="form-control" id="published_at" name="published_at" required>
    </div>




    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

@endsection