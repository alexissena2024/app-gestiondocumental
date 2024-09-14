<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colsistema extends Model
{
    use HasFactory;
    protected $fillable = [
        'colegios_fk',  
        'salasistemas_fk'
    ];
}
