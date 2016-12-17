@extends('layouts.master')

@section('title')
    QCMT Home
@endsection

@section('content')
    <div class='blurb'>
        <h1>About This Tool</h1>
        <p>
            This music tracker is a database to help members of the Quilisma
            Consort collect, organize, and track the music we play.
        </p>
        <h2>Key Features</h2>
        <ul>
            <li>Sortable lists of pieces of music and composers</li>
            <li>Links to facsimiles of manuscripts</li>
            <li>Piece details view including lyrics, translations, and comments</li>
            <li>For users with login access, ability add, edit, and delete information</li>
        </ul>
        <h2>Conventions</h2>
        <p>
            With early music, dates can be very precise or rather less so.
            Below are several examples of acceptable ways to indicate dates.
            It's more useful if dates are as specific as possible.
        </p>
        <ul>
            <li>ca. 1450-1521</li>
            <li>d. 1621</li>
            <li>fl. 1380s</li>
            <li>Early Renaissance</li>
        </ul>
    </div>
    <div class='blurb'>
        <h1>About the Quilisma Consort</h1>
        <p>
            The Quilisma Consort is an early music ensemble based in the
            Boston area, performing a wide range of Medieval and Renaissance
            music.
        </p>
        <p>
            The regular members of the group&mdash;Lisa Gay, Melika M.
            Fitzhugh, and Carolyn Jean Smith&mdash;mainly play reproductions of
            16th century recorders made by Francesco Li Virghi. Frequently,
            guest performers join them. The trio often performs with the Boston
            Recorder Orchestra under the direction of John Tyson.
        </p>
        <p>
            The consort has a resident composer. Melika writes minimalist works
            often inspired by early music. Combined with influences of music with
            asymmetric rhythms (especially Balkan music), the pieces she has
            written for the ensemble are an intriguing mix of ancient and modern
            sounds.
        </p>
        <p>
            To learn more about upcoming events and past programs, visit the
            <a href='http://www.quilisms.us' target='_blank'>Quilisma Consort website</a>.
        </p>
    </div>

@endsection
