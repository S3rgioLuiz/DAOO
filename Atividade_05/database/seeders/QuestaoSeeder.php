<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Questao;
use Carbon\Carbon;

class QuestaoSeeder extends Seeder
{
   
    public function run(): void
    {
        $now = Carbon::now()->toDateTimeString();

        Questao::insert([
            [
                'modulo_id' => 1, // ID do módulo "Operador de Atribuíção"
                'pergunta' => 'Qual é o resultado da seguinte operação em PHP? $x = 10; $x += 5; echo $x;',
                'explicacao' => 'Os operadores de atribuição, como +=, adicionam um valor à variável e armazenam o resultado nela. No exemplo, $x começa com 10, depois adiciona 5, resultando em 15. O echo $x imprime 15.',
                'referencia' => 'Para mais detalhes sobre operadores de atribuição em PHP, você pode consultar a documentação oficial do PHP: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
                'nivel' => 1,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 1,
                'pergunta' => 'Como a operação $x = 20; $x -= 4; afeta o valor de $x?',
                'explicacao' => 'O operador -= subtrai o valor à direita da variável e armazena o resultado na variável. No exemplo, $x começa com 20, depois subtrai 4, resultando em 16.',
                'referencia' => 'Veja mais sobre operadores de atribuição em PHP na documentação oficial: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
                'nivel' => 2,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 1,
                'pergunta' => 'O que acontece quando você usa o operador $x *= 3 em PHP?',
                'explicacao' => 'O operador *= multiplica a variável pelo valor à direita e armazena o resultado na variável. Por exemplo, se $x é 5, $x *= 3 resulta em $x sendo 15.',
                'referencia' => 'Consulte a documentação de PHP para operadores de atribuição: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
                'nivel' => 3,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 1,
                'pergunta' => 'Qual é o resultado da operação $x = 10; $x /= 2; echo $x;',
                'explicacao' => 'O operador /= divide a variável pelo valor à direita e armazena o resultado na variável. No exemplo, $x começa com 10 e depois é dividido por 2, resultando em 5.',
                'referencia' => 'Para mais informações sobre operadores de atribuição, consulte: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
                'nivel' => 4,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 1,
                'pergunta' => 'Explique o efeito do operador $x %= 4 em PHP.',
                'explicacao' => 'O operador %= calcula o módulo da variável pelo valor à direita e armazena o resultado na variável. Por exemplo, se $x é 10, $x %= 4 resulta em $x sendo 2.',
                'referencia' => 'Veja detalhes sobre operadores de atribuição na documentação oficial do PHP: https://www.php.net/manual/pt_BR/language.operators.assignment.php',
                'nivel' => 5,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Questões para o módulo "Operadores Aritméticos"
            [
                'modulo_id' => 2, // ID do módulo "Operadores Aritméticos"
                'pergunta' => 'Qual é o resultado de $a = 5 + 3 * 2 em PHP?',
                'explicacao' => 'Devido à precedência dos operadores, a multiplicação é feita antes da adição. Portanto, $a é igual a 5 + (3 * 2) = 5 + 6 = 11.',
                'referencia' => 'Veja a precedência dos operadores em PHP na documentação oficial: https://www.php.net/manual/pt_BR/language.operators.precedence.php',
                'nivel' => 1,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 2,
                'pergunta' => 'O que faz o operador ** em PHP? Exemplifique.',
                'explicacao' => 'O operador ** realiza a exponenciação. Por exemplo, $a = 2 ** 3 resulta em $a sendo 8, porque 2 elevado a 3 é 8.',
                'referencia' => 'Consulte a documentação de PHP para operadores aritméticos: https://www.php.net/manual/pt_BR/language.operators.arithmetic.php',
                'nivel' => 2,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 2,
                'pergunta' => 'Qual é a diferença entre / e // em PHP?',
                'explicacao' => 'Em PHP, o operador / realiza divisão e retorna um número flutuante. O operador // não existe em PHP; para divisão inteira, você deve usar o operador / e converter o resultado.',
                'referencia' => 'Veja a documentação sobre operadores de divisão em PHP: https://www.php.net/manual/pt_BR/language.operators.arithmetic.php',
                'nivel' => 3,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 2,
                'pergunta' => 'O que é a operação de módulo em PHP e como usá-la?',
                'explicacao' => 'A operação de módulo (%) retorna o resto da divisão entre dois números. Por exemplo, 10 % 3 resulta em 1, porque 10 dividido por 3 é 3 com um resto de 1.',
                'referencia' => 'Consulte a documentação de PHP para operadores aritméticos: https://www.php.net/manual/pt_BR/language.operators.arithmetic.php',
                'nivel' => 4,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 2,
                'pergunta' => 'Como calcular a raiz quadrada de um número em PHP?',
                'explicacao' => 'Você pode usar a função sqrt() para calcular a raiz quadrada de um número. Por exemplo, sqrt(16) retorna 4.',
                'referencia' => 'Veja a documentação de PHP para funções matemáticas: https://www.php.net/manual/pt_BR/function.sqrt.php',
                'nivel' => 5,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            // Questões para o módulo "Operadores Lógicos"
            [
                'modulo_id' => 3, // ID do módulo "Operadores Lógicos"
                'pergunta' => 'Qual é o resultado da expressão em PHP: true && false?',
                'explicacao' => 'O operador && realiza uma operação lógica E. O resultado é true apenas se ambos os operandos forem true. No exemplo, true && false resulta em false.',
                'referencia' => 'Consulte a documentação de PHP para operadores lógicos: https://www.php.net/manual/pt_BR/language.operators.logical.php',
                'nivel' => 1,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 3,
                'pergunta' => 'Como funciona o operador || em PHP?',
                'explicacao' => 'O operador || realiza uma operação lógica OU. O resultado é true se pelo menos um dos operandos for true. Por exemplo, true || false resulta em true.',
                'referencia' => 'Veja a documentação de PHP sobre operadores lógicos: https://www.php.net/manual/pt_BR/language.operators.logical.php',
                'nivel' => 2,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 3,
                'pergunta' => 'Qual é a diferença entre os operadores & e && em PHP?',
                'explicacao' => 'O operador & realiza uma operação lógica E bit a bit, enquanto && realiza uma operação lógica E. O operador && tem precedência mais alta e é mais comumente usado.',
                'referencia' => 'Consulte a documentação para operadores lógicos em PHP: https://www.php.net/manual/pt_BR/language.operators.logical.php',
                'nivel' => 3,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 3,
                'pergunta' => 'Como o operador ! é utilizado em PHP?',
                'explicacao' => 'O operador ! realiza uma negação lógica. Ele inverte o valor booleano de uma expressão. Por exemplo, !true resulta em false.',
                'referencia' => 'Veja mais sobre operadores lógicos em PHP: https://www.php.net/manual/pt_BR/language.operators.logical.php',
                'nivel' => 4,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'modulo_id' => 3,
                'pergunta' => 'O que faz o operador xor em PHP?',
                'explicacao' => 'O operador xor realiza uma operação lógica OU exclusivo. O resultado é true se exatamente um dos operandos for true. Por exemplo, true xor false resulta em true.',
                'referencia' => 'Consulte a documentação de PHP para operadores lógicos: https://www.php.net/manual/pt_BR/language.operators.logical.php',
                'nivel' => 5,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
