@extends('layouts.master')

@section('title')
    Add a New Composer
@endsection

@section('content')
    <h1>Add a New Composer</h1>

    <form method='POST' action='/composers'>

        {{ csrf_field() }}

        <label>First Name</label>
        <input type='text' id='first_name' name='first_name'>
        @if($errors->get('first_name'))
            <ul class='errors'>
                @foreach($errors->get('first_name') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Last Name</label>
        <input type='text' id='last_name' name='last_name'>
        @if($errors->get('last_name'))
            <ul class='errors'>
                @foreach($errors->get('last_name') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <label>Dates</label>
        <input type='text' id='dates' name='dates'>
        @if($errors->get('dates'))
            <ul class='errors'>
                @foreach($errors->get('dates') as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        @endif
        <br/>

        <button type='submit'>Add Composer</button>

    </form>
@endsection
