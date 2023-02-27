<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miniatura extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titulo',
        'slug',
        'foto',
        'cuerpo',
        'fecha_hora',
        'categoria',
    ];
}
