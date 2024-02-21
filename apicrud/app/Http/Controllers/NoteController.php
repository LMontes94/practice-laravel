<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        /*$notes = Note::all();
        return response()->json($notes, 200);*/
        return response()->json(Note::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $note
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $note = Note::finde($id);
        return response()->json($note, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, string $id): JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
        return response()->json(['success' => true], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Note::find($id)->delete();
        return response()->json(['success' => true], 200);
    }
}
