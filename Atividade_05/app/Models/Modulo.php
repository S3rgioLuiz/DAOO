<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Modulo extends Model
{
    use HasFactory, HasRelationships;

    protected $fillable = [
        'nome',
        'descricao',
        'status',
    ];

    public function questoes() {
        return $this->hasMany(Questao::class);
    }
}
