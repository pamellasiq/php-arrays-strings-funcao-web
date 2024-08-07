<?php
// subrotina
function exibeMensagem ($mensagem) {
    echo $mensagem .PHP_EOL;
}

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

// $contasCorrentes ['123.258.852-93'] = [
//     'titular' =>'Cláudia',
//     'cargo' => 'Auxiliar de Limpeza',
//     'saldo' => 1500
// ];

//subtraio o valor dele mesmo
$contasCorrentes['123.456.789-10']['saldo'] -=500;

if( 500 > $contasCorrentes['123.456.489-11']['saldo']){
    exibeMensagem("Você não pode sacar este valor!");
}else{
$contasCorrentes['123.456.789-10']['saldo'] -=500;
}

//foreach >Para cada uma das contasCorrentes, chamada de conta.
foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem('-------------------------------------------' .PHP_EOL.
                    'CPF: '. $cpf .PHP_EOL.
                    'Titular:'.$conta['titular'] .PHP_EOL.
                    'Cargo: '.$conta['cargo'] .PHP_EOL.
                    'Saldo: R$ '.$conta['saldo'] .PHP_EOL.
                    '-------------------------------------------' .PHP_EOL);
}
