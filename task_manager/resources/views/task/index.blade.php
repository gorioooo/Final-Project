@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">Create Task</a>

                    @if ($tasks->count() > 0)
                    <ul class="list-group">
                        @foreach ($tasks as $task)
                        <li class="list-group-item">
                            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                            <span class="badge badge-primary badge-pill">{{ $task->priority }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <p>No tasks found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
