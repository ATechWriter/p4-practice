@extends('layouts.master')

@section('title')
    Add a New Piece
@endsection

@section('content')
        <h1>Add a New Piece</h1>

        <form method='POST' action='/pieces'>

            {{ csrf_field() }}

            <label>Title</label>
            <input type='text' id='title' name='title'>
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
                    <option value='{{ $composer_id }}'>{{ $composer }}</option>
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
            <input type='text' id='publication_date' name='publication_date'>
            @if($errors->get('publication_date'))
                <ul class='errors'>
                    @foreach($errors->get('publication_date') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <label>Manuscript</label>
            <input type='text' id='manuscript' name='manuscript'>
            @if($errors->get('manuscript'))
                <ul class='errors'>
                    @foreach($errors->get('manuscript') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <label>Link</label>
            <input type='url' id='link' name='link'>
            @if($errors->get('link'))
                <ul class='errors'>
                    @foreach($errors->get('link') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <label>Lyrics</label>
            <textarea id='lyrics' name='lyrics' rows='15' cols='40'>
            </textarea>
            @if($errors->get('lyrics'))
                <ul class='errors'>
                    @foreach($errors->get('lyrics') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <label>Translation</label>
            <textarea id='translation' name='translation' rows='15' cols='40'>
            </textarea>
            @if($errors->get('translation'))
                <ul class='errors'>
                    @foreach($errors->get('translation') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <label>Comments</label>
            <textarea id='comments' name='comments' rows='15' cols='40'>
            </textarea>
            @if($errors->get('comments'))
                <ul class='errors'>
                    @foreach($errors->get('comments') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            <br/>

            <button type='submit'>Add Piece</button>

        </form>

@endsection
