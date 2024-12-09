@extends('layouts.app')

@section('title', 'Lista de sarcini')

@section('content')
    <h1 class="mb-4">Lista de sarcini</h1>
    <div class="row g-3">
        @foreach ($tasks as $task)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task['title'] }}</h5>
                        <p class="card-text">{{ $task['description'] }}</p>
                        <span
                            class="badge bg-{{ strtolower($task['priority']) == 'mare' ? 'danger' : (strtolower($task['priority']) == 'medie' ? 'warning text-dark' : 'success') }}">
                            {{ $task['priority'] }}
                        </span>
                        <a href="{{ route('tasks.show', $task['id']) }}" class="btn btn-primary btn-sm mt-2">Vezi detalii</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
