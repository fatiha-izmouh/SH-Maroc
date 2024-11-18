<?php

namespace App\Http\Controllers\UtilisateurControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualitesController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return view('Accueil.accueil', compact('actualites'));
    }

    public function actualitesCF(Request $request)
    {
        $query = Actualite::where('categorie', 'Centre de femme');

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
        $query = Actualite::where('categorie', 'JEA_Maroc');

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

        return view('Site.Actualities.Actualite-JEA', compact('actualitesJEA', 'searchTerm'));
    }

    public function actualitesTS(Request $request)
    {
        $query = Actualite::where('categorie', 'Action Social');

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
