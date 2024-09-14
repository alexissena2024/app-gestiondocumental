<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;
    protected $fillable=['tipoelemento','serie','placa','mac','nombrepc','fk_marca','fk_modelo',
    'fk_memoria', 'fk_disco','fk_ofimatica' ,'fk_antivirus'];
}
