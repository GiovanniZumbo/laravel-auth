@extends('layouts.app')

@section('content')
    <div class="container text-light">
        <h1 class="text-center my-3">My portfolio</h1>

        <div class="row row-cols-3 g-3">
            @forelse ($projects as $index => $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $project->image_url }}" class="card-img-top h-75 object-fit-contain" alt="...">
                        <div class="card-body">
                            <h4>{{ $project->title }}</h4>
                            <p class="card-text">{{ $project->description }}</p>
                            @include('partials.buttons')
                        </div>
                    </div>
                </div>
            @empty
                <p>Non ci sono progetti da visualizzare</p>
            @endforelse
        </div>
    </div>
@endsection
