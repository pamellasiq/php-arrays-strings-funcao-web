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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

// variável que apaga uma variável
// unset($contasCorrentes['123.456.789-10']);

//foreach >Para cada uma das contasCorrentes, chamada de conta.
// foreach ($contasCorrentes as $cpf => $conta){
//     exibeMensagem(
//         mensagem: "-------------------------------------------
//         CPF: {$cpf}
//         Titular: {$conta['titular']}
//         Cargo: {$conta['cargo']}
//         Saldo: R$ {$conta['saldo']}
// ------------------------------------------- ");
// }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>