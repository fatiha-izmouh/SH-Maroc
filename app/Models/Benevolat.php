<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Benevolat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'email',
        'telephone',
        'adresse',
        'disponibilites',
        'competences',
        'statut',
    ];
}
