<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creneaux extends Model
{
    use HasFactory;

    public $fillable = [
        'utilisateur_id',
        'ordinateur_id',
        'date',
        'heure_debut',
        'heure_fin'
    ];
}
