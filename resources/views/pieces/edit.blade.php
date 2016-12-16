@extends('layouts.master')

@section('title')
    Edit {{ $piece->title }}
@endsection

@section('content')
    <h1>Editing "{{ $piece->title }}"</h1>

    <form method='POST' action='/pieces/{{ $piece->id }}'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <input name='id' value='{{ $piece->id }}' type='hidden'>

        <label>Title</label>
        <input type='text' id='title' name='title' value='{{ old('title', $piece->title) }}'>
        <br/>

        <label>Composer</label>
        <select name='composer_id'>
            @foreach($composers_for_dropdown as $composer_id => $composer)
                <option
                {{ ($composer_id == $piece->composer->id) ? 'SELECTED' : '' }}
                value='{{ $composer_id }}'
                >{{ $composer }}</option>
            @endforeach
        </select>
        <br/>

        <label>Publication Date</label>
        <input type='text' id='publication_date' name='publication_date' value=' {{ old('publication_date', $piece->publication_date) }}'>
        <br/>

        <label>Manuscript</label>
        <input type='text' id='manuscript' name='manuscript' value='{{ old('manuscript', $piece->manuscript) }}'>
        <br/>

        <label>Link</label>
        <input type='url' id='link' name='link' value='{{ old('link', $piece->link) }}'>
        <br/>

        <label>Lyrics</label>
        <textarea id='lyrics' name='lyrics' rows='15' cols='40'>{{ old('lyrics', $piece->lyrics) }}</textarea>
        <br/>

        <label>Translation</label>
        <textarea id='translation' name='translation' rows='15' cols='40'>{{ old('translation', $piece->translation) }}</textarea>
        <br/>

        <label>Comments</label>
        <textarea id='comments' name='comments' rows='15' cols='40'>{{ old('comments', $piece->comments) }}</textarea>
        <br/>

        <button type='submit'>Update</button>

    </form>

@endsection
