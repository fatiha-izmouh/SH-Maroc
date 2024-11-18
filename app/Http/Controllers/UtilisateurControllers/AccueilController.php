<?php

namespace App\Http\Controllers\UtilisateurControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Participation;
use App\Models\Chiffre;
use App\Models\Partenaire;

class AccueilController extends Controller
{
    public function index(Request $request)
    {
        $actualites = Actualite::all();

        $logos = Partenaire::where('statut', 'accepted')
            ->distinct()
            ->pluck('logo');

        $latestData = Chiffre::latest()->first();

        $data = [
                'beneficiaires' => $latestData ? $latestData->num_beneficiaire : 0,
                'jeunes_formes' => $latestData ? $latestData->num_jeunes : 0,
                'projets_realises' => $latestData ? $latestData->num_projets : 0,
                'initiatives_sociales' => $latestData ? $latestData->num_initiatives : 0,
            ];

        return view('Site.Accueil.accueil', compact('actualites', 'logos','data'));
    }

    public function actualitesCF(Request $request)
    {
        $query = Actualite::where('categorie', 'Centre de la femme');

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('adresse', 'like', '%' . $searchTerm . '%')
                    ->orWhereDate('date', $searchTerm);
            });
        }

        $actualitesCF = $query->get();
        $searchTerm = $request->input('search', '');

        return view('Site.Actualities.Actualite-CF', compact('actualitesCF', 'searchTerm'));
    }

    public function actualitesJEA(Request $request)
    {
        $query = Actualite::where('categorie', 'JEA-Maroc');

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('adresse', 'like', '%' . $searchTerm . '%')
                    ->orWhereDate('date', $searchTerm);
            });
        }

        $actualitesJEA = $query->get();
        $searchTerm = $request->input('search', '');

        return view('Actualities.Actualite-JEA', compact('actualitesJEA', 'searchTerm'));
    }

    public function actualitesTS(Request $request)
    {
        $query = Actualite::where('categorie', 'Travail Social');

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('adresse', 'like', '%' . $searchTerm . '%')
                    ->orWhereDate('date', $searchTerm);
            });
        }

        $actualitesTS = $query->get();
        $searchTerm = $request->input('search', '');

        return view('Site.Actualities.Actualite-TS', compact('actualitesTS', 'searchTerm'));
    }

    public function show($id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('Site.Actualities.actualiteDetails', compact('actualite'));
    }
}
