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
        @if($errors->get('title'))
            <ul class='errors'>
                @foreach($errors->get('title') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
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
        @if($errors->get('composer_id'))
            <ul class='errors'>
                @foreach($errors->get('composer_id') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Publication Date</label>
        <input type='text' id='publication_date' name='publication_date' value=' {{ old('publication_date', $piece->publication_date) }}'>
        @if($errors->get('publication_date'))
            <ul class='errors'>
                @foreach($errors->get('publication_date') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Manuscript</label>
        <input type='text' id='manuscript' name='manuscript' value='{{ old('manuscript', $piece->manuscript) }}'>
        @if($errors->get('manuscript'))
            <ul class='errors'>
                @foreach($errors->get('manuscript') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Link</label>
        <input type='url' id='link' name='link' value='{{ old('link', $piece->link) }}'>
        @if($errors->get('link'))
            <ul class='errors'>
                @foreach($errors->get('link') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Lyrics</label>
        <textarea id='lyrics' name='lyrics' rows='15' cols='40'>{{ old('lyrics', $piece->lyrics) }}</textarea>
        @if($errors->get('lyrics'))
            <ul class='errors'>
                @foreach($errors->get('lyrics') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Translation</label>
        <textarea id='translation' name='translation' rows='15' cols='40'>{{ old('translation', $piece->translation) }}</textarea>
        @if($errors->get('translation'))
            <ul class='errors'>
                @foreach($errors->get('translation') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Comments</label>
        <textarea id='comments' name='comments' rows='15' cols='40'>{{ old('comments', $piece->comments) }}</textarea>
        @if($errors->get('comments'))
            <ul class='errors'>
                @foreach($errors->get('comments') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <button type='submit'>Update</button>

    </form>

@endsection
