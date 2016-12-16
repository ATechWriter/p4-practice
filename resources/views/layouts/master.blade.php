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

        @if(Session::get('flash_message') != null)
            <div class='flash_message'>{{ Session::get('flash_message') }}</div>
        @endif

        <header>
            <h1>Quilisma Consort Music Tracker</h1>
        </header>

        <nav>
            <ul class='navigate'>
                @if(Auth::check())
                    <li id='home'><a href='/'>Home</a></li>
                    <li id='logout'><a href='/logout'>Log Out</a></li>
                    <li id='pieces'><a href='/pieces'>View Pieces</a></li>
                    <li id='composers'><a href='/composers'>View Composers</a></li>
                @else
                    <li id='home'><a href='/'>Home</a></li>
                    <li id='login'><a href='/login'>Log In</a></li>
                    <li id='register'><a href='/register'>Register</a></li>
                    <li id='pieces'><a href='/pieces'>View Pieces</a></li>
                    <li id='composers'><a href='/composers'>View Composers</a></li>
                @endif
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
