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
            <br/>

            <label>Composer</label>
            <select name='composer_id'>
                @foreach($composers_for_dropdown as $composer_id => $composer)
                    <option value='{{ $composer_id }}'>{{ $composer }}</option>
                @endforeach
            </select>
            <br/>

            <label>Publication Date</label>
            <input type='text' id='publication_date' name='publication_date'>
            <br/>

            <label>Manuscript</label>
            <input type='text' id='manuscript' name='manuscript'>
            <br/>

            <label>Link</label>
            <input type='url' id='link' name='link'>
            <br/>

            <label>Lyrics</label>
            <textarea id='lyrics' name='lyrics' rows='15' cols='40'>
            </textarea>
            <br/>

            <label>Translation</label>
            <textarea id='translation' name='translation' rows='15' cols='40'>
            </textarea>
            <br/>

            <label>Comments</label>
            <textarea id='comments' name='comments' rows='15' cols='40'>
            </textarea>
            <br/>

            <button type='submit'>Add Piece</button>

        </form>

@endsection
