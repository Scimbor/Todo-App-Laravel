@extends('layouts.app')

@section('content')

<h1>Todos</h1>

@if (count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="card my-3 p-3">
            <h2><a href="todo/{{ $todo->id }}">{{ $todo->title }}</a></h2>
            <span class="badge badge-danger">{{ $todo->due }}</span>
        </div>
    @endforeach
    @endif
@endsection
