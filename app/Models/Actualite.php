<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'title',
        'date',
        'adresse',
        'objectif',
        'description',
        'categorie',
        'image',
        'projet_id',
    ];
    protected $casts = [
        'date' => 'datetime', 
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

}
