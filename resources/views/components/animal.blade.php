<div class="card">
    <a href="{{ route('animals.details', $id) }}">
        <img src="{{ asset($img) }}" alt="{{ $name }}">
    </a>
    <div class="card-body">
        <h2>{{ $name }}</h2>
        <p>Espèce : {{ $species }}</p>
        <p>Age : {{ $age }} ans</p>
        <p>{{ $description }}</p>
        <div class="card-actions">
            <a href="{{ route('animals.update', $id) }}">Modifier</a>
            <a href="{{ route('animals.delete', $id) }}">Supprimer</a>
        </div>
    </div>
</div>