<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Actualite;
use Illuminate\Support\Facades\Storage;


class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('Dashboard.Actualites.actualite', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Projet::select('type')->distinct()->get();
        return view('Dashboard.Actualites.add_actualite', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'required|image', 
            'adresse' => 'required|string|max:255',
            'description' => 'required|string',
            'objectif' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
        ]);
    
        $project = Projet::where('type', $validatedData['categorie'])->first();
        $validatedData['projet_id'] = $project->id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Actualite-image', 'public');
            $validatedData['image'] = $imagePath;
        }
        $actualite = Actualite::create($validatedData);
    
        
    
        return redirect()->route('actualites.index')->with('success', 'Actualité added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('Dashboard.Actualites.details', compact('actualite'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('Dashboard.Actualites.modify_actualite', compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $actualite = Actualite::findOrFail($id);

    // Validate input
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'adresse' => 'required|string|max:255',
        'description' => 'required|string',
        'objectif' => 'required|string',
        'categorie' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
    ]);

    // Check if a new image file was uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($actualite->image && Storage::disk('public')->exists($actualite->image)) {
            Storage::disk('public')->delete($actualite->image);
        }

        // Store the new image
        $imagePath = $request->file('image')->store('Actualite-image', 'public');
        $validatedData['image'] = $imagePath;
    }

    // Update the actualité
    $actualite->update($validatedData);

    return redirect()->route('actualites.index')->with('success', 'Actualité updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();
        return redirect()->route('actualites.index')->with('success', 'Actualité deleted successfully');
    }
}
