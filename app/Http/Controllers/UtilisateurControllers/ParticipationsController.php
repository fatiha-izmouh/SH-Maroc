<?php

namespace App\Http\Controllers\UtilisateurControllers;

use Illuminate\Http\Request;
use App\Models\Participation;
use App\Http\Controllers\Controller;

class ParticipationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_complet' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'ville' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'domaine_projet' => 'required|string|max:255',
            'situation_professionnelle' => 'required|string|max:255',
            'duree_idee' => 'required|string|max:255',
            'objectif' => 'required|string',
            'attentes' => 'required|string',
            'formation_description' => 'required|string',
            'confiance_projet' => 'required|string',
            'engagement_programme' => 'required|string',
        ]);

        $validatedData['statut']='en cour';

        Participation::create($validatedData);

        return redirect()->back()->with('success', 'Votre participation a été enregistrée avec succès.');
    }
}
