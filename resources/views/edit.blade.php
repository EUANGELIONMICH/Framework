@extends('layouts.main')
@section('content')
<p>Edit</p>
<form action="{{ route('dealer.update',['dealer' => $edit->slug]) }}" method="POST">
@method('PUT')
@csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $edit->title }}">
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ $edit->slug }}">
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Rating</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $edit->location }}">
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Description</label>
        <input type="text" class="form-control" id="body" name="body" value="{{ $edit->body }}">

    <div class="mb-3">
        <label for="owner" class="form-label">Genre</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $edit->author }}">
    </div>

    <div class="mb-3">
        <label for="owner" class="form-label">Published At</label>
        <input type="text" class="form-control" id="published_at" name="published_at" value="{{ $edit->published_at }}">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@if ($errors->any())
<div class="alert alert-danger mt-2">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection