@extends('layouts.main')

@section('content')

    <main class="container">
        <h1 class="text-center mb-3">Movies</h1>
        <div class="row d-flex justify-content-center">
            @foreach ($movies as $movie)
                <div class="m-1 col-sm-6 col-md-4 col-lg-4 border border-primary border-5 shadow-lg p-3 bg-body rounded">
                    <div class="bg-warning">
                        <span class="fw-bold text-white">{{ $movie['title'] }}</span>
                    </div>
                    <div>
                        <span class="fw-bold">Titolo originale:</span>
                        <span>{{ $movie['original_title'] }}</span>
                    </div>
                    <div>
                        <span class="fw-bold">Nazionalità:</span>
                        <span>{{ $movie['nationality'] }}</span>
                    </div>
                    <div>
                        <span class="fw-bold">Data di uscita:</span>
                        <span>{{ $movie['date'] }}</span>
                    </div>
                    <div>
                        <span style='font-weight: bolder'>Voto:</span>
                        <span>{{ $movie['vote'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
