@extends('layouts.master')

@section('title')
    Composers List
@endsection

@section('content')
    <h1>Composers List</h1>

    @if(Auth::check())
        <p><a class='action-button' href='/composers/create'>Add Composer</a></p>
    @endif

    @if(sizeof($composers) == 0)
        No composers in database. <a href='/composers/create'>Add a composer?</a>

    @else
        <table>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Dates</th>
                <th>Actions</th>
            </tr>

            @foreach($composers as $composer)
                <tr>
                    <td>{{ $composer->last_name }}</td>
                    <td>{{ $composer->first_name }}</td>
                    <td>{{ $composer->dates }} </td>
                    <td><a href='/composers/{{ $composer->id }}'>View</a>
                        @if(Auth::check())
                            | <a href='/composers/{{ $composer->id }}/edit'>Edit</a>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
    @endif
@endsection
