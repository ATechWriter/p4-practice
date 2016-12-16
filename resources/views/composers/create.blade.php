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
        <br/>

        <label>Last Name</label>
        <input type='text' id='last_name' name='last_name'>
        <br/>

        <label>Dates</label>
        <input type='text' id='dates' name='dates'>
        <br/>

        <button type='submit'>Add Composer</button>

    </form>
@endsection
