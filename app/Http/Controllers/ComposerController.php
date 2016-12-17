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
        # Validate the request
        $this->validate($request, [
            'first_name' => 'nullable|min:2',
            'last_name' => 'required|min:2',
            'dates' => 'required|min:4',
        ]);

        # If valid, save the new composer
        $composer = new Composer();
        $composer->first_name = $request->input('first_name');
        $composer->last_name = $request->input('last_name');
        $composer->dates = $request->input('dates');
        $composer->save();

        Session::flash('flash_message', 'Composer '.$composer->first_name.' '.$composer->last_name.' added');

        return redirect('/composers');
    }

    /**
     * GET
     * Display the specified composer
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $composer = Composer::find($id);

        if(is_null($composer)) {

            Session::flash('flash_message', 'Composer not found');

            return redirect('/composers');
        }

        return view('composers.show')->with([
            'composer' => $composer,
        ]);
    }

    /**
     * GET
     * Show the form for editing the specified composer
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $composer = Composer::find($id);

        return view('composers.edit')->with(
            ['composer' => $composer,]
        );
    }

    /**
     * POST
     * Update the specified composer in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # Validation will go here!!

        $composer = Composer::find($request->id);
        $composer->first_name = $request->first_name;
        $composer->last_name = $request->last_name;
        $composer->dates = $request->dates;
        $composer->save();

        Session::flash('flash_message', 'Edits to '.$composer->first_name.' '.$composer->last_name.' saved');
        return redirect('/composers');
    }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
