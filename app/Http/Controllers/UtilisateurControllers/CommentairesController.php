<?php

namespace App\Http\Controllers\UtilisateurControllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Http\Controllers\Controller;


class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Commentaire::where('statut', 'accepted')->get();
        return view('Site.qui-sommes-nous.qui-sommes-nous', compact('commentaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
}
