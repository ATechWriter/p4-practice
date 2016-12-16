<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
* Show the homepage
*/

Route::get('/', function() {
    return view('index');
});

/**
* COMPOSER RESOURCE
*/

# Show a list of all composers
Route::get('/composers', 'ComposerController@index')->name('composers.index');

# Show a form to add a composer
Route::get('/composers/create', 'ComposerController@create')->name('composers.create');

# Post a completed form to add a composer
Route::post('/composers', 'ComposerController@store')->name('composers.store');

# Show an individual composer
Route::get('/composers/{id}', 'ComposerController@show')->name('composers.show');

# Show a form to edit specified composer
Route::get('/composers/{id}/edit', 'ComposerController@edit')->name('composers.edit');

# Process form to edit specified composer
Route::put('/composers/{id}', 'ComposerController@update')->name('composers.update');

/**
* PIECE RESOURCE
*/

# Show a list of all pieces
Route::get('/pieces', 'PieceController@index')->name('pieces.index');

# Show a form to add a piece
Route::get('/pieces/create', 'PieceController@create')->name('pieces.create');

# Post a completed form to add a piece
Route::post('pieces', 'PieceController@store')->name('pieces.store');

# Show an individual piece
Route::get('/pieces/{id}', 'PieceController@show')->name('pieces.show');

# Show a form to edit specified piece
Route::get('/pieces/{id}/edit', 'PieceController@edit')->name('pieces.edit');

# Process form to edit specified piece
Route::put('/pieces/{id}', 'PieceController@update')->name('pieces.update');

# Show a page to confirm deletion of specified piece
Route::get('/pieces/{id}/delete', 'PieceController@delete')->name('pieces.destroy');

# Delete specified piece from the database
Route::delete('/pieces/{id}', 'PieceController@destroy')->name('pieces.destroy');

/**
* Debug DB
*/
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

/**
* Destroy the DB
*/

if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database qcmt');
        DB::statement('CREATE database qcmt');

        return 'Dropped qcmt database; created qcmt database.';
    });

};
