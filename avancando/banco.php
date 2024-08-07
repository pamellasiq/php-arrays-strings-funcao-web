<?php
// subrotinas
function exibeMensagem ($mensagem) {
    echo $mensagem .PHP_EOL;
}

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar esse valor!");
    }else{
        //subtraio o valor dele mesmo
        $conta['saldo']-= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar) :array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
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


$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'], 900
);


//foreach >Para cada uma das contasCorrentes, chamada de conta.
foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem('-------------------------------------------' .PHP_EOL.
                    'CPF: '. $cpf .PHP_EOL.
                    'Titular:'.$conta['titular'] .PHP_EOL.
                    'Cargo: '.$conta['cargo'] .PHP_EOL.
                    'Saldo: R$ '.$conta['saldo'] .PHP_EOL.
                    '-------------------------------------------' .PHP_EOL);
}
