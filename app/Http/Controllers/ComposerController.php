<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Piece;
use App\Composer;
use Session;

class ComposerController extends Controller
{
    /**
     * GET
     * Display a listing of all composers
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $composers = Composer::get();

        return view('composers.index')->with([
            'composers' => $composers
        ]);
    }

    /**
     * GET
     * Show the form for creating a new composer
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('composers.create');
    }

    /**
     * POST
     * Store a newly created composer in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validation will go here!!!
        $composer = new Composer();
        $composer->first_name = $request->input('first_name');
        $composer->last_name = $request->input('last_name');
        $composer->dates = $request->input('dates');
        $composer->save();

        Session::flash('flash_message', 'Composer '.$composer->first_name.' '.$composer->last_name.' added');

        return redirect('/composers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
