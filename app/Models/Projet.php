<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
    ];

    public function actualites()
    {
        return $this->hasMany(Actualite::class);
    }
    
    public function partenaires()
    {
        return $this->hasMany(Partenaire::class);
    }
}
