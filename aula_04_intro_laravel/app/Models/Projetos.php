<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'meta_de_valor', 'dias_para_atingir'];
}
