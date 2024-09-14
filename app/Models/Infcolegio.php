<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infcolegio extends Model
{
    use HasFactory;
    protected $fillable = [
        'informes_fk',  
        'colegios_fk', 
    ];
}
