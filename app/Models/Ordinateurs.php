<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordinateurs extends Model
{
    use HasFactory;

    public $fillable = [
        'nom',
        'etat'
    ];
}
