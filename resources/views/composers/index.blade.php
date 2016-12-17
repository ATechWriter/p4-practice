@extends('layouts.master')

@section('title')
    Composers List
@endsection

@section('head')
    <link rel='stylesheet' href='/css/theme.metro-dark.css'>
    <script>
        $(function() {
            $('#Composers').tablesorter({
                theme: 'metro-dark',
                sortList: [[0,0],[1,0]],
                widgets: ['zebra', 'columns', 'filter']
            })
        });
    </script>
@endsection

@section('content')
    <h1>Composers List</h1>

    @if(Auth::check())
        <p><a class='action-button' href='/composers/create'>Add Composer</a></p>
    @endif

    @if(sizeof($composers) == 0)
        No composers in database. <a href='/composers/create'>Add a composer?</a>

    @else
        <table id='Composers' class='tablesorter'>
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Dates</th>
                    <th class='sorter-false'>Actions</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    @endif
@endsection
