@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-start">
        <h2>Seo list</h2>
        <a href="{{ route('seo-create') }}" class="btn btn-info text-white">Create meta</a>
    </div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Url page</th>
                <th>Title</th>
                <th>Controls</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($seo as $oneSeo)
                <tr>
                    <td>{{ $oneSeo->id }}</td>
                    <td>{{ $oneSeo->url }}</td>
                    <td>{{ $oneSeo->title }}</td>
                    <td>
                        <a href="{{ route('seo-edit', [$oneSeo->id]) }}" class="btn btn-secondary mr-2">Edit</a>
                        <a href="{{ route('seo-delete', [$oneSeo->id]) }}" class="btn btn-danger mr-2" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
