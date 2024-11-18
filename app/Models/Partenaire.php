<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'nom_entreprise',
        'email',
        'telephone',
        'proposition',
        'logo',
        'statut',
    ];
}
