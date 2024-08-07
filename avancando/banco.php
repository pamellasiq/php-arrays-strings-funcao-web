<?php
//importar arquivos separados
// include 'funcoes.php';

//arquivos obrigatórios
require_once 'funcoes.php';

// require_once inclui somente se não tiver incluido anteriormente

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
    exibeMensagem(
        mensagem: "-------------------------------------------
        CPF: {$cpf}
        Titular: {$conta['titular']}
        Cargo: {$conta['cargo']}
        Saldo: R$ {$conta['saldo']}
------------------------------------------- ");
}
