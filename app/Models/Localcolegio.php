<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localcolegio extends Model
{
    use HasFactory;
    protected $fillable=['fk_idcolegios','localidad_FK','fk_nomsedes','fk_dependencias'];
}
