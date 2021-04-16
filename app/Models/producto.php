<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'Calificacion',
        'Categoria_Edad',
        'Descripcion',
        'Nacionalidad',
        'Nombre',
        'Precio',
        'Stock',
        'Tipo',
        'imagen'
    ];
}
