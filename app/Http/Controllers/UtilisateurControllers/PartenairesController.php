<?php

namespace App\Http\Controllers\UtilisateurControllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Http\Controllers\Controller;



class PartenairesController extends Controller
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
            'nom_complet' => 'required|string',
            'nom_entreprise' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'proposition' => 'required|string',
            'logo' => 'required|image',
        ]);



        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('images', 'public');
            $validatedData['logo'] = $logoPath;
        }
        $validatedData['statut']='en cour';


        Partenaire::create($validatedData);

        return redirect()->back()->with('success', 'Votre demande a été soumise avec succès.');
    }
}
