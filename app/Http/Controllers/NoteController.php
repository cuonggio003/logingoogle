<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNoteRequest;

class NoteController extends Controller
{
    function showNote()
    {
        $notes = Note::all();
        return view('backend.notes.list', compact('notes'));
    }

    function createNote()
    {
        $notes = Note::all();
        return view('backend.notes.create', compact('notes'));
    }


    function store(CreateNoteRequest $request)
    {   
        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->type = $request->type;
        $note->save();
        return redirect()->route('show.note');
    }

    function updateNote($id)
    {
        $note = Note::findOrFail($id);
        return view('backend.notes.update', compact('note'));
       
    }

    function editNote(Request $request, $id) {
        $note = Note::findOrFail($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->type = $request->type;
        $note->save();
        return redirect()->route('show.note');
    }

    function deleteNote(Request $request, $id){
        
        $note = Note::findOrFail($id);
       
        $note->delete();

        return redirect()->route('show.note');

    }

}