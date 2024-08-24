<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modulo;
use Carbon\Carbon;

class ModuloSeeder extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        Modulo::insert([
            [
                'nome' => 'Operador de Atribuíção',
                'descricao' => 'Atribui um Valor ao Operando à sua Esquerda Baseado no Valor do Operando à Direita',
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Operadores Aritméticos',
                'descricao' => 'Executam Operações Matemáticas como Adição e Subtração com Operandos',
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nome' => 'Operadores Lógicos',
                'descricao' => 'Permitem Realizar Operações de Comparação e Combinação de Valores Booleanos',
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
        
    }

    
}
