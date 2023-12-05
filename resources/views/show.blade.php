@extends('layouts.app')

@section('title', "Task")

@section('content')
    <h1 class="text-primary">{{ $task->title }}</h1>
    @if (session('success'))
        <h6>{{ session("success") }}</h6>
    @endif
    <p>{{ $task->description }}</p>
    <p>
        Start on : {{ $task->start_date }}
        & End on : {{ $task->end_date }}
    </p>
    <p>
        Status: 
        <span class="text-{{ $task->status ? "success" : "danger" }}">
            {{ $task->status ? "Completed!" : "Not completed yet!" }}
        </span>
    </p>

    <div class="container">
        <div class="row">
            <form class="col-3"   method="POST" action="{{ route("tasks.status",["task" => $task]) }}">
                @csrf
                @method("PUT")
                <button type="submit" class="btn">Show as {{ !$task->status ? "completed" : "not completed" }}</button>
            </form>
            <a  class="col-3 btn" href="{{ route("task.edit",['task' => $task]) }}">
                Edit
            </a>
            <form  class="col-3" method="POST" action="{{ route("tasks.delete", ["task" => $task]) }}">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn">Delete</button>
            </form>
            <a class="col-3 btn"  href="{{ route("tasks.index") }}" >Go to home</a>
        </div>
    </div>
@endsection