<?php

class NoteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notes = Note::all();
        
        return View::make('note.index', array('notes' => $notes));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('note.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$note = new Note();
        $note->title = Input::get('title');
        $note->info = Input::get('info');
        $note->save();
        
        return Redirect::route('note.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return "Action with $id";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $note = Note::find($id);
        
		return View::make('note.edit', array('note' => $note));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//PUT or PATCH
        $note = Note::find($id);
        $note->title = Input::get('title');
        $note->info = Input::get('info');
        
        $note->save();
        
        return Redirect::route('note.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$note = Note::find($id);
        $note->delete();
        
        return Redirect::route('note.index');
	}


}
