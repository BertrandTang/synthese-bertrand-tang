@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <h1 class="detail-title">{{ $animal->name }}</h1>

    <div class="animal-details">
        <img src="{{ asset($animal->img) }}" alt="{{ $animal->name }}">
        <div>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Age : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
@endsection