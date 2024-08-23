<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    use HasFactory;

    protected $table= "questoes";
    protected $fillable = [
        'modulo_id',
        'pergunta',
        'explicacao',
        'referencia',
        'nivel',
        'status',
    ];

    public function modulo() {
        return $this->belongsTo(Modulo::class);
    }

    public function alternativas() {
        return $this->hasMany(Alternativa::class);
    }
}
