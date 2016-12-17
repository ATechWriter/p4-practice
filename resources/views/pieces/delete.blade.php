@extends('layouts.master')

@section('title')
    Really delete {{ $piece->title }}?
@endsection

@section('content')

    <h1>About to Delete "{{ $piece->title }}"</h1>
    <form method='POST' action='/pieces/{{ $piece->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <p>Are you sure you want to delete "{{ $piece->title }}"?</p>

        <p><strong>This action cannot be undone.</strong></p>

        <input type='submit' value='Yes'>  <a href='/pieces/{{ $piece->id }}'>Cancel</a>

    </form>

@endsection
