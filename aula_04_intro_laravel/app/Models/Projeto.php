<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'meta_de_valor', 'dias_para_atingir', 'user_id'];

    public function recompensas()
    {
        return $this->hasMany(Recompensa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
