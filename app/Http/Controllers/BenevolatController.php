<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benevolat;

class BenevolatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benevolats = Benevolat::all();
        return view('Dashboard.Benevolats.benevolat', compact('benevolats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Benevolats.add_benevolat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom_complet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'disponibilites' => 'required|string|max:255',
            'competences' => 'required|string|max:255',
        ]);

        $validatedData['statut'] = 'en cour';

        Benevolat::create($validatedData);

        return redirect()->route('benevolats.index')->with('success', 'Bénévole ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $benevolat = Benevolat::findOrFail($id);
        return view('Dashboard.Benevolats.details_benevolat', compact('benevolat'));
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
    public function update(Request $request, string $id,$status)
    {
        $benevolat = Benevolat::findOrFail($id);
        $benevolat->statut = $status;
        $benevolat->save();

        return redirect()->route('benevolats.index')->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
