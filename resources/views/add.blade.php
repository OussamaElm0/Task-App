@extends('layouts.app')

@section('title', "Add Task")
    
@section('content')
    <form method="POST" action="{{ route("tasks.add") }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" /><br>
            @error('title')
                <p class="error">Title is required</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                {{ old('description') }}
            </textarea>
            @error('description')
                <p class="error">Description is required</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" min="{{ date('Y-m-d') }}" value="{{ old('start_date') }}" class="form-control">
            @error('start_date')
                <p class="error">Start date is required</p>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" min="{{ date('Y-m-d') }}" value="{{ old('end_date') }}" class="form-control">
            @error('end_date')
                <p class="error">End date is required</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection