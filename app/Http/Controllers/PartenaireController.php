<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;


class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('Dashboard.Partenaires.partenaire', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Partenaires.add_partenaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'nom_complet' => 'required|string|max:255',
             'nom_entreprise' => 'required|string|max:255',
             'logo' => 'required|image',
             'email' => 'required|email|max:255',
             'telephone' => 'required|string|max:20',
             'proposition' => 'required|string|max:1000',
        ]);
     
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('logo', 'public');
            $validatedData['logo'] = $imagePath;
        }

    
        $validatedData['statut'] = 'en cour';
        Partenaire::create($validatedData);
    
         return redirect()->route('partenaires.index')->with('success', 'Partenaire ajouté avec succès!');
     }
     
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('Dashboard.Partenaires.details_partenaire', compact('partenaire'));
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
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->statut = $status;
        $partenaire->save();

        return redirect()->route('partenaires.index')->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
