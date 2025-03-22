<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{

    public function createNote(Request $request)
    {
        $note = Note::create($request->all());

        return response()->json(['message' => 'Note created successfully', 'note' => $note], 201);
    }

    public function getSellerNotes($sellerId)
    {
        $notes = Note::where('user_id', $sellerId)->get();
        return response()->json(['notes' => $notes]);
    }

}
