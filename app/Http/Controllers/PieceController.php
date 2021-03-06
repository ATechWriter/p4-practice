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
         $pieces = Piece::with('composer')->get();

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
        # Validate the request
        $this->validate($request, [
            'title' => 'required|min:2',
            'composer_id' => 'required|integer',
            'publication_date' => 'nullable|min:4',
            'manuscript' => 'nullable|min:4',
            'link' => 'nullable|url',
            'lyrics' => 'nullable|min:4',
            'translation' => 'nullable|min:4',
            'comments' => 'nullable|min:4'
        ]);

        # If valid, save the new piece
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

        Session::flash('flash_message', 'Piece "'.$piece->title.'" added');

        return redirect('/pieces');
    }

    /**
     * GET
     * Display the specified piece
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piece = Piece::find($id);

        if(is_null($piece)) {

            Session::flash('flash_message', 'Piece not found');

            return redirect('/pieces');
        }

        return view('pieces.show')->with([
            'piece' => $piece,
        ]);
    }

    /**
     * GET
     * Show the form for editing the specified piece
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piece = Piece::find($id);
        $composers_for_dropdown = Composer::getForDropdown();

        return view('pieces.edit')->with([
            'piece' => $piece,
            'composers_for_dropdown' => $composers_for_dropdown,
        ]);
    }

    /**
     * POST
     * Update the specified piece in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # Validate the request
        $this->validate($request, [
            'title' => 'required|min:2',
            'composer_id' => 'required|integer',
            'publication_date' => 'nullable|min:4',
            'manuscript' => 'nullable|min:4',
            'link' => 'nullable|url',
            'lyrics' => 'nullable|min:4',
            'translation' => 'nullable|min:4',
            'comments' => 'nullable|min:4'
        ]);

        # If valid, save changes to the piece
        $piece = Piece::find($request->id);
        $piece->title = $request->title;
        $piece->composer_id = $request->composer_id;
        $piece->publication_date = $request->publication_date;
        $piece->manuscript = $request->manuscript;
        $piece->link = $request->link;
        $piece->lyrics = $request->lyrics;
        $piece->translation = $request->translation;
        $piece->comments = $piece->comments;
        $piece->save();

        Session::flash('flash_message', 'Edits to "'.$piece->title.'" saved');
        return redirect('/pieces');
    }

    /**
     * GET
     * Show page to confirm deletion
     */
     public function delete($id) {

         $piece = Piece::find($id);

         return view('pieces.delete')->with('piece', $piece);
     }

    /**
     * POST
     * Remove the specified piece from storage
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $piece = Piece::find($id);

        if(is_null($piece)) {
            Session::flash('flash_message','Piece not found');
            return redirect('/pieces');
        }

        $piece->delete();

        Session::flash('flash_message','"'.$piece->title.'" deleted');
        return redirect('/pieces');
    }
}
