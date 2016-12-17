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

        <div class='form-group'>
            <label>Composer</label><br/>
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
        </div>
        <div class='form-group'>
            <label>Title</label><br/>
            <input type='text' size='80' id='title' name='title' value='{{ old('title', $piece->title) }}'>
            @if($errors->get('title'))
                <ul class='errors'>
                    @foreach($errors->get('title') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Publication Date</label><br/>
            <input type='text' id='publication_date' name='publication_date' value=' {{ old('publication_date', $piece->publication_date) }}'>
            @if($errors->get('publication_date'))
                <ul class='errors'>
                    @foreach($errors->get('publication_date') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Manuscript</label><br/>
            <input type='text' size='80' id='manuscript' name='manuscript' value='{{ old('manuscript', $piece->manuscript) }}'>
            @if($errors->get('manuscript'))
                <ul class='errors'>
                    @foreach($errors->get('manuscript') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Link</label><br/>
            <input type='url' size='80' id='link' name='link' value='{{ old('link', $piece->link) }}'>
            @if($errors->get('link'))
                <ul class='errors'>
                    @foreach($errors->get('link') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Comments</label><br/>
            <textarea id='comments' name='comments' rows='5' cols='55'>{{ old('comments', $piece->comments) }}</textarea>
            @if($errors->get('comments'))
                <ul class='errors'>
                    @foreach($errors->get('comments') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group-float'>
            <label>Lyrics</label><br/>
            <textarea id='lyrics' name='lyrics' rows='15' cols='55'>{{ old('lyrics', $piece->lyrics) }}</textarea>
            @if($errors->get('lyrics'))
                <ul class='errors'>
                    @foreach($errors->get('lyrics') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group-float'>
        <label>Translation</label><br/>
            <textarea id='translation' name='translation' rows='15' cols='55'>{{ old('translation', $piece->translation) }}</textarea>
            @if($errors->get('translation'))
                <ul class='errors'>
                    @foreach($errors->get('translation') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <button type='submit'>Update</button>
        </div>
    </form>

@endsection
