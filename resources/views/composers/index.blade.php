@extends('layouts.master')

@section('title')
    Composers List
@endsection

@section('content')
    <h1>Composers List</h1>

    <a class='action-button' href='/composers/create'>Add Composer</a></br>
    @if(sizeof($composers) == 0)
        No composers in database. <a href='/composers/create'>Add a composer?</a>

    @else
        <table>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Dates</th>
            </tr>

            @foreach($composers as $composer)
                <tr>
                    <td>{{ $composer->last_name }}</td>
                    <td>{{ $composer->first_name }}</td>
                    <td>{{ $composer->dates }} </td>
                </tr>
            @endforeach

        </table>
    @endif
@endsection
