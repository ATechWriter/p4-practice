@extends('layouts.master')

@section('title')
    {{ $composer->first_name }} {{ $composer->last_name }}
@endsection

@section('content')
    <h1>Composer Details</h1>

    <p>Name: {{ $composer->first_name }} {{ $composer->last_name }}</p>
    <p>Dates: {{ $composer->dates }}</p>

    <p><a class='action-button' href='/composers/{{ $composer->id }}/edit'>Edit</a></p>

@endsection
