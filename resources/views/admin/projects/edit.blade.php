@extends('layouts.create-or-edit-page')

@section('form-action')
    {{ route('admin.projects.update', $project) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection
