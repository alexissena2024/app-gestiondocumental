<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguridad extends Model
{
    use HasFactory;
    protected $fillable=['contraseña','restablecer_contraseña','politicas expiracion','bloqueo de intentos','cedulaFK'];
}
