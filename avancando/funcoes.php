<?php

// subrotinas:
function exibeMensagem ($mensagem) {
    echo $mensagem .PHP_EOL;
}


// funçoes:
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

//&serve para passar uma referencia
function titularComLetrasMaiusculas (array &$conta) {
    //pega uma string e coloca todos os caracteres em letra maiúscula
    $conta['titular'] = mb_strtoupper($conta['titular']);
}