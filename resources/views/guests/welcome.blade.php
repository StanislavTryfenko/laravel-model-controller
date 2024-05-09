@extends('layouts.app')

@section('title') Laravel Movie @endsection


@section('content')

    <div class="container">
        <h1>Laravel Movie</h1>

        <div class="p-5 mb-4 bg-dark text-white">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome to Laravel Movies</h1>
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
                                {{ $book->title }}
                            </h3>
                            <p>{{ $book->plot }}</p>
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
