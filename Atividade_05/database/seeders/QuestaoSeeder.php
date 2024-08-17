<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestaoSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        DB::table('questoes')->insert([
            'pergunta' => 'Qual é o resultado da seguinte operação em PHP? $x = 10; $x += 5; echo $x;',
            'explicacao' => 'Os operadores de atribuição, como +=, adicionam um valor à variável e armazenam o resultado nela. No exemplo, $x começa com 10, depois adiciona 5, resultando em 15. O echo $x imprime 15.',
            'referencia' => 'Para mais detalhes sobre operadores de atribuição em PHP, você pode consultar a documentação oficial do PHP: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
            'nivel' => 1,
            'status' => 0,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
