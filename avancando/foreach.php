<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Pampam',
        'cargo' => 'Desenvolvedora',
        'saldo' => 10000,
    ],
    '123.456.489-11' => [
        'titular' => 'Marcia',
        'cargo' => 'Gestora',
        'saldo' => 100000
    ],
    '123.256.789-10' => [
        'titular' => 'Roberto',
        'cargo' => 'Estagiário',
        'saldo' => 300
    ]
];

//adicionar item em array associativo

$contasCorrentes ['123.258.852-93'] = [
    'titular' =>'Cláudia',
    'cargo' => 'Auxiliar de Limpeza',
    'saldo' => 1500
];

//foreach >Para cada uma das contasCorrentes, chamada de conta.
foreach ($contasCorrentes as $cpf => $conta){
    echo '-------------------------------------------' .PHP_EOL;
    echo 'CPF: '. $cpf .PHP_EOL;
    echo 'Titular:'.$conta['titular'] .PHP_EOL;
    echo 'Cargo: '.$conta['cargo'] .PHP_EOL;
    echo 'Saldo: R$ '.$conta['saldo'] .PHP_EOL;
    echo '-------------------------------------------' .PHP_EOL;
}
