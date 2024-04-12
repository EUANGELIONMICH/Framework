@extends('layouts.main')
@section('content')
    <div>

<p>Anime List</p>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Rating</th>
        <th>Description</th>
        <th>Genre</th>
        <th>Published At</th>
    </tr>
    <tr>
        <td>{{ $item->title }}</td>
        <td>{{ $item->slug }}</td>
        <td>{{ $item->location }}</td>
        <td>{{ $item->body }}</td>
        <td>{{ $item->author }}</td>
        <td>{{ $item->published_at }}</td>
    </tr>
</table>
<div>
    <a href="{{ route('dealer.edit',['dealer' => $item->slug]) }}" >
        <button class="btn btn-primary">Edit</button>
    </a>
</div>
<br /br>
<form action="{{ route('dealer.destroy',['dealer' => $item->slug]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger" onclick="return confirm('anda yakin ?')">Delete</button>
</form>
    </div>
@endsection