@extends('layouts.master')

@section('title')
    Pieces List
@endsection

@section('content')
    <h1>Pieces List</h1>

    <p><a class='action-button' href='/pieces/create'>Add Piece</a></p>

    @if(sizeof($pieces) == 0)
        No pieces in database. <a href='/pieces/create'>Add a piece?</a>

    @else
        <table>
            <tr>
                <th>Composer First Name</th>
                <th>Composer Last Name</th>
                <th>Title</th>
                <th>Publication Date</th>
                <th>Manuscript</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>

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
                    <td><a href='/pieces/{{ $piece->id }}'>View</a> | <a href='/pieces/{{ $piece->id }}/edit'>Edit</a></td>
                </tr>
            @endforeach

        </table>
    @endif
@endsection
