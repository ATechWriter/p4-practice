<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Piece;
use App\Composer;
use Session;

class PieceController extends Controller
{
    /**
     * GET
     * Display a listing of all pieces
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
         $pieces = Piece::get();

         return view('pieces.index')->with([
             'pieces' => $pieces
         ]);
     }

    /**
     * GET
     * Show the form for creating a new piece
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $composers_for_dropdown = Composer::getForDropdown();

        return view('pieces.create')->with([
            'composers_for_dropdown' => $composers_for_dropdown
        ]);
    }

    /**
     * POST
     * Store a newly created piece in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validation wil go here!!
        $piece = new Piece();
        $piece->title = $request->input('title');
        $piece->composer_id = $request->input('composer_id');
        $piece->publication_date = $request->input('publication_date');
        $piece->manuscript = $request->input('manuscript');
        $piece->link = $request->input('link');
        $piece->lyrics = $request->input('lyrics');
        $piece->translation = $request->input('translation');
        $piece->comments = $request->input('comments');
        $piece->save();

        Session::flash('flash_message', 'Piece '.$piece->title.' added');

        return redirect('/pieces');
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
