<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;
    protected $fillable=['nombre_informe','fecha_inicial','fecha_final','convertir_pdf_a_excel'];
}
