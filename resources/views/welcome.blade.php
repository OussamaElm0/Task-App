@extends('layouts.app')

@section('title',"Task Keeper")
    
@section('content')
    <h1 class="text-primary">Welcome!</h1>

    <div>
        <a href="{{ route('tasks.add') }}" class="text-light btn btn-dark">Add new task</a>
        <a href="{{ route('tasks.index') }}"  class="text-light btn btn-dark">Show all tasks</a>
    </div>
@endsection