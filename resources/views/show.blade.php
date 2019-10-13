@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go back</a>
    <h1>{{ $todo->title }}</h1>
    <div class="badge badge-danger">
        {{ $todo->due }}
    </div>

    <p>{{ $todo->content }}</p>
    <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary mt-2">Edit</a>
    <form method="post" action="/todo/{{ $todo->id }}" class="float-right">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2">Delete</button>
    </form>
    @endsection
