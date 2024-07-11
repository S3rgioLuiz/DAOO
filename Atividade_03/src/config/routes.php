<?php

use Sergi\Atividade03\controller\api\{Usuario};
use Sergi\Atividade03\controller\web\Usuario as WebUsuario;

$routes = [
    'api' => [
        'usuario' => Usuario::class,
    ],
    // 'web' => [
    //     'produtos' => WebProduto::class
    // ]
];