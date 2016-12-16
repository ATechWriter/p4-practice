@extends('layouts.master')

@section('title')
    Edit {{ $composer->first_name }} {{ $composer->last_name }}
@endsection

@section('content')
    <h1>Editing {{ $composer->first_name }} {{ $composer->last_name }}</h1>

    <form method='POST' action='/composers/{{ $composer->id }}'>

        {{ method_field('PUT') }}

        {{ csrf_field() }}

        <input name='id' value='{{ $composer->id }}' type='hidden'>

        <label>First Name</label>
        <input type='text' id='first_name' name='first_name' value='{{ old('first_name', $composer->first_name) }}'>
        <br/>

        <label>Last Name</label>
        <input type='text' id='last_name' name='last_name' value='{{ old('last_name', $composer->last_name) }}'>
        <br/>

        <label>Dates</label>
        <input type='text' id='dates' name='dates' value='{{ old('dates', $composer->dates) }}'>
        <br/>

        <button type='submit'>Update</button>

    </form>

@endsection
