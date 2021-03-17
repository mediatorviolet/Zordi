<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
    use HasFactory;

    public $fillable = [
        'utilisateur_id',
        'ordinateur_id',
        'date',
        'heure_debut',
        'heure_fin'
    ];

    /**
     * Get the ordinateur associated with the slot
     */
    public function ordinateur()
    {
        return $this->hasOne(Ordinateurs::class, 'foreign_key');
    }

    /**
     * Get the utilisateur associated with the slot
     */
    public function utilisateur()
    {
        return $this->hasOne(Utilisateurs::class, 'foreign_key');
    }
}
