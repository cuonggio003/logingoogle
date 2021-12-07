<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateNoteRequest;

class NoteController extends Controller implements BaseInterface
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
        $note->name = $request->name;
       
        $note->content = $request->content;
        $note->category = $request->category;
        $note->date = $request->date;
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
        $note->name = $request->name;
        $note->content = $request->content;
        $note->category = $request->category;
        $note->date= $request->date;
        $note->save();
        return redirect()->route('show.note');
    }

    function deleteNote(Request $request, $id){
        
        $note = Note::findOrFail($id);
       
        $note->delete();

        return redirect()->route('show.note');

    }

}
