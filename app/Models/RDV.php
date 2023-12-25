<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDV extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'Date_de_naissance',
       'Téléphone',
        'Email',
        'CIN',
        'Date_rendez_vous',
       

    ];
}
