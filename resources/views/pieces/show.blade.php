@extends('layouts.master')

@section('title')
    {{ $piece->title }}
@endsection

@section('content')
    <h1>Piece Details</h1>

    @if(Auth::check())
        <p><a class='action-button' href='/pieces/{{ $piece->id }}/edit'>Edit</a> <a class='action-button' href='/pieces/{{ $piece->id }}/delete'>Delete</a></p>
    @endif

    <p>Title: {{ $piece->title }}</p>
    <p>Composer: {{ $piece->composer->first_name }} {{ $piece->composer->last_name }}</p>
    <p>Publication Date: {{ $piece->publication_date }}</p>
    <p>Manuscript: {{ $piece->manuscript }}</p>
    <p>Link: {{ $piece->link }}</p>

    <div class=piece-comments>
        <h2>Comments</h2>
        <p>{{ $piece->comments }}</p>
    </div>

    <div class=piece-lyrics>
        <h2>Lyrics</h2>
        <p>{{ $piece->lyrics }}</p>
    </div>

    <div class=piece-translation>
        <h2>Translation</h2>
        <p>{{ $piece->translation }}</p>
    </div>

@endsection
