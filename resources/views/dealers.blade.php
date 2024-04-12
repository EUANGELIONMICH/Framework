@extends('layouts.main')

@section('content')
<div>
    <h2>Anime List</h2>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 8px;">Judul</th>
                <th style="border: 1px solid black; padding: 8px;">Rating</th>
                <th style="border: 1px solid black; padding: 8px;">Genre</th>
                <th style="border: 1px solid black; padding: 8px;">Published At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item as $item)
            <tr>
                <td style="border: 1px solid black; padding: 8px;">
                    <a href="{{ route('dealer.show', ['dealer' => $item]) }}">{{ $item->title }}</a>
                </td>
                <td style="border: 1px solid black; padding: 8px;">{{ $item->location }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $item->author }}</td>
                <td style="border: 1px solid black; padding: 8px;">{{ $item->published_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
