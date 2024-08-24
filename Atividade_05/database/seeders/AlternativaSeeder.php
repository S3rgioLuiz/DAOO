<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alternativa;
use Carbon\Carbon;

class AlternativaSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        // Alternativas para as questões sobre "Operador de Atribuíção"
       Alternativa::insert([
            // Alternativas para a questão 1
            [
                'questao_id' => 1,
                'opcao' => '15',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 1,
                'opcao' => '10',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 1,
                'opcao' => '5',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 1,
                'opcao' => '20',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 2
            [
                'questao_id' => 2,
                'opcao' => '15',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 2,
                'opcao' => '20',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 2,
                'opcao' => '10',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 2,
                'opcao' => '12',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 3
            [
                'questao_id' => 3,
                'opcao' => '5',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 3,
                'opcao' => '10',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 3,
                'opcao' => '15',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 3,
                'opcao' => '20',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 4
            [
                'questao_id' => 4,
                'opcao' => '20',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 4,
                'opcao' => '15',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 4,
                'opcao' => '10',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 4,
                'opcao' => '5',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 5
            [
                'questao_id' => 5,
                'opcao' => '8',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 5,
                'opcao' => '10',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 5,
                'opcao' => '12',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 5,
                'opcao' => '6',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 6
            [
                'questao_id' => 6,
                'opcao' => '2',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 6,
                'opcao' => '4',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 6,
                'opcao' => '6',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 6,
                'opcao' => '8',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 7
            [
                'questao_id' => 7,
                'opcao' => '10',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 7,
                'opcao' => '15',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 7,
                'opcao' => '20',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 7,
                'opcao' => '5',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 8
            [
                'questao_id' => 8,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 8,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 8,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 8,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 9
            [
                'questao_id' => 9,
                'opcao' => 'false',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 9,
                'opcao' => 'true',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 9,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 9,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 10
            [
                'questao_id' => 10,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 10,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 10,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 10,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 11
            [
                'questao_id' => 11,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 11,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 11,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 11,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 12
            [
                'questao_id' => 12,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 12,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 12,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 12,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 13
            [
                'questao_id' => 13,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 13,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 13,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 13,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 14
            [
                'questao_id' => 14,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 14,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 14,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 14,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Alternativas para a questão 15
            [
                'questao_id' => 15,
                'opcao' => 'true',
                'status' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 15,
                'opcao' => 'false',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 15,
                'opcao' => 'null',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'questao_id' => 15,
                'opcao' => 'undefined',
                'status' => false,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
