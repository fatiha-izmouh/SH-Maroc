<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;


class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Commentaire::all();
        return view('Dashboard.Commentaires.commentaire', compact('commentaires'));
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
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'opinion' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $validatedData['statut'] = 'en cour';

        Commentaire::create($validatedData);

        return redirect()->route('qui-somme-nous.index')->with('success', 'Votre commentaire a été envoyé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('Dashboard.Commentaires.details_commentaire', compact('commentaire'));
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
    public function update(Request $request, string $id, $status)
    {
        $commentaire = Commentaire::findOrFail($id);

        $commentaire->statut = $status;
        $commentaire->save();

        return redirect()->route('commentaires.index')->with('success', 'Commentaire status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
