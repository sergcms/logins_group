@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-start">
        <h2>News</h2>
        <a href="{{ route('news-create') }}" class="btn btn-info text-white">Create news</a>
    </div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Alias</th>
                <th>Title</th>
                <th>Date publish</th>
                <th>Published</th>
                <th>Controls</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($news as $oneNews)
                <tr>
                    <td>{{ $oneNews->id }}</td>
                    <td>{{ $oneNews->alias }}</td>
                    <td>{{ $oneNews->title }}</td>
                    <td>{{ date('d-m-Y', strtotime($oneNews->date_publish)) }}</td>
                    <td>{{ $oneNews->published === 1 ? 'published' : '-' }}</td>
                    <td>
                        <a href="{{ route('news-edit', [$oneNews->id]) }}" class="btn btn-secondary mr-2">Edit</a>
                        <a href="{{ route('news-delete', [$oneNews->id]) }}" class="btn btn-danger mr-2" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
