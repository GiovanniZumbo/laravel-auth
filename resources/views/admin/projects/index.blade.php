@extends('layouts.home-layout')

@section('admin-buttons')
    <div>
        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success">Show</a>
        <a href="" class="btn btn-warning">Edit</a>
    </div>
@endsection
