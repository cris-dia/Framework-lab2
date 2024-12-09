@extends('layouts.app')

@section('title', 'Pagina principală')

@section('content')
    <div class="text-center">
        <h1 class="display-4">Bine ați venit la To-Do App!</h1>
        <p class="lead">Gestionați sarcinile echipei rapid și eficient.</p>
    </div>

    <div class="mt-5">
        <h2 class="h4">Ultima sarcină creată</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $lastTask['title'] }}</h5>
                <p class="card-text">{{ $lastTask['description'] }}</p>
                <span class="badge bg-warning text-dark">Prioritate medie</span>
            </div>
        </div>
    </div>
@endsection
