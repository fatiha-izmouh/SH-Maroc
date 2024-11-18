<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chiffre;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {

        $chiffres = Chiffre::orderBy('date', 'desc')->take(6)->get()->reverse();
        $dates = $chiffres->pluck('date')
        ->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('d F'); 
        })
        ->toArray();
    $jeunesFormes = $chiffres->pluck('num_jeunes')->toArray();
    $beneficiaires = $chiffres->pluck('num_beneficiaire')->toArray();
    $initiativesSociales = $chiffres->pluck('num_initiatives')->toArray();
    $num_projets = $chiffres->pluck('num_projets')->toArray();


 
        $latestData = Chiffre::latest()->first();

    $data = [
        'beneficiaires' => $latestData ? $latestData->num_beneficiaire : 0,
        'jeunes_formes' => $latestData ? $latestData->num_jeunes : 0,
        'projets_realises' => $latestData ? $latestData->num_projets : 0,
        'initiatives_sociales' => $latestData ? $latestData->num_initiatives : 0
    ];
        return view('Dashboard.Accueil.accueil',compact('data','dates','jeunesFormes', 'beneficiaires','initiativesSociales','num_projets')); 

    }
    
    public function index1()
    {
        return view('Dashboard.admin.home');
    }
    
    public function updateNumber(Request $request)
{
    // Get the last record from the 'chiffre' table
    $lastRecord = Chiffre::latest()->first();

    // Get the current date
    $currentDate = now();

    // Prepare the data for the new record
    $newRecordData = [
        'num_beneficiaire' => $request->type == 'num_beneficiaire' ? $request->number : ($lastRecord ? $lastRecord->num_beneficiaire : 0),
        'num_jeunes' => $request->type == 'num_jeunes' ? $request->number : ($lastRecord ? $lastRecord->num_jeunes : 0),
        'num_projets' => $request->type == 'num_projets' ? $request->number : ($lastRecord ? $lastRecord->num_projets : 0),
        'num_initiatives' => $request->type == 'num_initiatives' ? $request->number : ($lastRecord ? $lastRecord->num_initiatives : 0),
        'date' => $currentDate
    ];

    // Create a new record with the updated values
    Chiffre::create($newRecordData);

    // Redirect back with success message
    return back()->with('success', 'Data updated successfully');
}





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    public function saveResults(Request $request)
    {
        // Get the values from the form input
        $beneficiaires = $request->input('beneficiaires');
        $jeunesFormes = $request->input('jeunes-formes');
        $projetsRealises = $request->input('projets-realises');
        $initiativesSociales = $request->input('initiatives-sociales');

        // Store the values in the session (or database if you prefer)
        session([
            'beneficiaires' => $beneficiaires,
            'jeunesFormes' => $jeunesFormes,
            'projetsRealises' => $projetsRealises,
            'initiativesSociales' => $initiativesSociales
        ]);

        // Redirect to the results page
        return redirect()->route('showResults');
    }

    // Function to display the results page
    public function showResults()
    {
        // Retrieve the values from the session
        $beneficiaires = session('beneficiaires', 'N/A');
        $jeunesFormes = session('jeunesFormes', 'N/A');
        $projetsRealises = session('projetsRealises', 'N/A');
        $initiativesSociales = session('initiativesSociales', 'N/A');

        // Pass the data to the view
        return view('results', compact('beneficiaires', 'jeunesFormes', 'projetsRealises', 'initiativesSociales'));
    }
}
