@extends('layouts.app')

@section('page-title')
    Laraflix
@endsection

@section('content')
    <div class="bg-dark">
        <div class="p-5 mb-4 text-white">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Laraflix</h1>
                <h3 class="display-10 fw-bold">Welcome to Laravel Movies</h3>
                <p class="col-md-8 fs-4">
                    This is a simple movies management system.
                </p>
                <button class="btn btn-primary btn-lg" type="button">
                    View movies (non va)
                </button>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                {{ $movie->title }}
                            </h3>
                            <h5>
                                {{ $movie->original_title }}
                            </h5>
                            <h5>
                                {{ $movie->nationality }}
                            </h5>
                            <h5>
                                {{ $movie->date }}
                            </h5>
                            <h5>
                                {{ $movie->vote }}
                            </h5>
                        </div>
                    </div>
                </div>

            @empty

                <div class="col">
                    <p>No movies available yet</p>
                </div>
            @endforelse

        </div>
    </div>
@endsection
