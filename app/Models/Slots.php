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
        'horaire_id',
        'date'
    ];

    /**
     * Get the ordinateur associated with the slot
     */
    public function ordinateur()
    {
        return $this->belongsTo(Ordinateurs::class);
    }

    /**
     * Get the utilisateur associated with the slot
     */
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateurs::class);
    }

    public function horaire() {
        return $this->belongsTo(Horaire::class);
    }
}
