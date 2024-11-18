<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('Dashboard.Messages.message', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'nom_complet' => $request->nom . ' ' . $request->prenom,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('Dashboard.Messages.details_message', compact('message'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Message deleted successfully');
    }
}
