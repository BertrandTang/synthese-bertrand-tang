@extends('layouts.app')

@section('title', 'RefugeConnect')

@section('content')
    <h1 class="page-title">Nos animaux</h1>

    <div class="cards-grid">
        @forelse ($animals as $animal)
                <x-animal
                    :id="$animal->id"
                    :name="$animal->name"
                    :description="$animal->description"
                    :img="$animal->img"
                    :species="$animal->species"
                    :age="$animal->age"
                />
        @empty
            <p>Aucun article a afficher pour le moment.</p>
        @endforelse
    </div>
@endsection
