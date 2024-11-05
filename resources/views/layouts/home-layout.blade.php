@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">My portfolio</h1>

        <div class="row row-cols-3 g-3">
            @forelse ($projects as $project)
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4>{{ $project->title }}</h4>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                    @yield('admin-buttons')
                </div>
            @empty
                <p>Non ci sono progetti da visualizzare</p>
            @endforelse
        </div>
    </div>
@endsection
