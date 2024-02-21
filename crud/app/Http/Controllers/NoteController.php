<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('note.index',compact('notes'));
    }

    public function create(){
       
        return view('note.create');
    }

    public function store(Request $request){
        /*$note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();*/

        /*Note::create([
            'title' => $request->title,
            'description' => $request->description
        ]);*/

        Note::create($request->all());
        return redirect()->route('note.index');
    }

    public function edit(Note $note){        
        return view('note.edit', compact('note'));
    }

    public function update(Request $request,Note $note){
        $note->update($request->all());
        return redirect()->route('note.index');
    }

    public function show(Note $note){        
        return view('note.show', compact('note'));
    }

    public function destroy(Note $note){    
        $note->delete();    
        return redirect()->route('note.index');
    }
 
}
