<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_publicaciones",
        "texto",
        "id_usuarios",
    ];
}
