<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recompensa extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descricao', 'valor', 'projeto_id'];

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
