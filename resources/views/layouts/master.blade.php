<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','QCMT')
    </title>

    <meta charset='utf-8'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

        @yield('head')

    </head>
    <body>

        <header>
            <h1>Quilisma Consort Music Tracker</h1>
        </header>

        <nav>
            <ul class='navigate'>
                <li id='pieces'><a href='/pieces'>Pieces</a></li>
                <li id='composers'><a href='/composers'>Composers</a></li>
            </ul>
        </nav>

        <section>
            @yield('content')
        </section>

        <footer>
            &copy; {{ date('Y') }} Lisa Gay
        </footer>

        @yield('body')

    </body>
    </html>
