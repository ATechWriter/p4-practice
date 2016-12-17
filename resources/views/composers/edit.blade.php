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

        <div class='form-group'>
            <label>First Name</label><br/>
            <input type='text' id='first_name' name='first_name' value='{{ old('first_name', $composer->first_name) }}'>
            @if($errors->get('first_name'))
                <ul class='errors'>
                    @foreach($errors->get('first_name') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Last Name</label><br/>
            <input type='text' id='last_name' name='last_name' value='{{ old('last_name', $composer->last_name) }}'>
            @if($errors->get('last_name'))
                <ul class='errors'>
                    @foreach($errors->get('last_name') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class='form-group'>
            <label>Dates</label><br/>
            <input type='text' id='dates' name='dates' value='{{ old('dates', $composer->dates) }}'>
            @if($errors->get('dates'))
                <ul class='errors'>
                    @foreach($errors->get('dates') as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <button type='submit'>Update</button>

    </form>

@endsection
