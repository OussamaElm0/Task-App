@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <a href="{{ route('tasks.add') }}" class="btn btn-primary">Add new task</a>
    @forelse ($tasks as $task)
        <div>
            <a class="h2 text-decoration-none" href="{{ route('tasks.find', ['task' => $task]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <h1>No task found!</h1>
    @endforelse

    <div class="mt-4 position-absolute start-50 translate-middle-x text-center">
        {{ $tasks->links('pagination::simple-bootstrap-5') }}
    </div>
@endsection