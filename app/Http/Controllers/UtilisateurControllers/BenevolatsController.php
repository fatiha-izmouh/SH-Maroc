<?php

namespace App\Http\Controllers\UtilisateurControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benevolat;

class BenevolatsController extends Controller
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
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'disponibilites' => 'required|string',
            'competences' => 'required|string',
        ]);
        $validatedData['statut']='en cour';

        Benevolat::create($validatedData);

        return redirect()->back()->with('success', 'Votre demande de bénévolat a été soumise avec succès.');
    }
}
