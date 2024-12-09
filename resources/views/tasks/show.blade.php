@extends('layouts.app')

@section('title', 'Detalii sarcină')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title mb-0">{{ $task['title'] }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Descriere:</strong> {{ $task['description'] }}</p>
            <span class="badge bg-danger">{{ $task['priority'] }}</span>
        </div>
    </div>
@endsection
