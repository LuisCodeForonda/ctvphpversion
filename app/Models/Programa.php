<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'foto',
        'hora_inicio',
        'hora_fin',
        'descripcion',
        'facebook',
        'twitter',
        'instagram',
        'tiktok',
        'youtube',
    ];
}
