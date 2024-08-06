<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Pampam',
        'cargo' => 'Desenvolvedora',
        'saldo' => 10000,
    ],
    12345648911 => [
        'titular' => 'Marcia',
        'cargo' => 'Gestora',
        'saldo' => 100000
    ],
    12325678910 => [
        'titular' => 'Roberto',
        'cargo' => 'Estagiário',
        'saldo' => 300
    ]
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