<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chiffre extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_beneficiaire',
        'num_jeunes',
        'num_projets',
        'num_initiatives',
        'date',
    ];
}
