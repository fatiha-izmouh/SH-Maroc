<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nom_complet',
        'date_naissance',
        'email',
        'telephone',
        'ville',
        'specialite',
        'domaine_projet',
        'situation_professionnelle',
        'duree_idee',
        'objectif',
        'attentes',
        'formation_description',
        'confiance_projet',
        'engagement_programme',
        'statut',
    ];
}
