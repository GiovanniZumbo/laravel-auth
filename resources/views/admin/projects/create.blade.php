@extends('layouts.create-or-edit-page')

@section('form-action')
    {{ route('admin.projects.store', $project) }}
@endsection

@section('form-method')
    @method('POST')
@endsection
