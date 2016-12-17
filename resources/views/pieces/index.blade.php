@extends('layouts.master')

@section('title')
    Pieces List
@endsection

@section('head')
    <link rel='stylesheet' href='/css/theme.metro-dark.css'>
    <script>
        $(function() {
            $('#Pieces').tablesorter({
                theme: 'metro-dark',
                sortList: [[2,0]],
                widgets: ['zebra', 'columns', 'filter']
            })
        });
    </script>
@endsection

@section('content')
    <h1>Pieces List</h1>

    @if(Auth::check())
        <p><a class='action-button' href='/pieces/create'>Add Piece</a></p>
    @endif

    @if(sizeof($pieces) == 0)
        No pieces in database

    @else
        <table id='Pieces' class='tablesorter'>
            <thead>
                <tr>
                    <th>Composer First Name</th>
                    <th>Composer Last Name</th>
                    <th>Title</th>
                    <th>Publication Date</th>
                    <th>Manuscript</th>
                    <th class='sorter-false'>Link</th>
                    <th class='sorter-false'>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pieces as $piece)
                    <tr>
                        <td>{{ $piece->composer->first_name }}</td>
                        <td> {{ $piece->composer->last_name }}</td>
                        <td>{{ $piece->title }}</td>
                        <td>{{ $piece->publication_date }}</td>
                        <td>{{ $piece->manuscript }}</td>
                        <td>
                            @if($piece->link == "")
                                Not available
                            @else
                                <a href='{{ $piece->link }}' target='_blank'>Go to manuscript</a>
                            @endif
                        </td>
                        <td><a href='/pieces/{{ $piece->id }}'>View</a>
                            @if(Auth::check())
                                | <a href='/pieces/{{ $piece->id }}/edit'>Edit</a> | <a href='/pieces/{{ $piece->id }}/delete'>Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
