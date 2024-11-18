<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participations = Participation::all();
        return view('Dashboard.Jea.participation_jea', compact('participations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Jea.add_participation');
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
            'objectif' => 'required|string|max:255',
            'attentes' => 'required|string|max:255',
            'formation_description' => 'required|string|max:500',
            'confiance_projet' => 'required|integer|between:1,10',
            'engagement_programme' => 'required|string|max:255',
        ]);
        $validatedData['statut'] = 'en cour';
        
        Participation::create($validatedData);

        return redirect()->route('participations.index')->with('success', 'Participation added successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $participation = Participation::findOrFail($id);
        return view('Dashboard.Jea.details_participation', compact('participation'));
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
        $participations = Participation::findOrFail($id);
        $participations->statut = $status;
        $participations->save();

        return redirect()->route('participations.index')->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
