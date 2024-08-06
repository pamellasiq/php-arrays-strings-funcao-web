<?php
//array associativos
$conta1 = [
    'nome' => 'Pampam',
    'saldo' => 10000
];

$conta1 ['titular'];

$conta2 = [
    'nome' => 'Marcia',
    'saldo' => 100000
];

$conta2 = [
    'nome' => 'Roberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i =0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] .PHP_EOL;
}